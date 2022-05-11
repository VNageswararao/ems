select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015778541564941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015778541564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015778541564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025641918182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015778541564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025641918182373

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021800994873047

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.001633882522583

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.001633882522583

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
		where billing=0 and appointment_date between  '2022-03-09' and '2022-03-09' and  patient_registration.office_id= 1      
 Execution Time:0.0086779594421387

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-08' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.0012788772583008

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-08' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.0012788772583008

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
		where billing=0 and appointment_date between  '2022-03-08' and '2022-03-09' and  patient_registration.office_id= 1      
 Execution Time:0.0084688663482666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060415267944336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060415267944336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014231204986572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014231204986572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014231204986572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014231204986572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.001168966293335

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.001168966293335

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
		where billing=0 and appointment_date between  '2022-03-09' and '2022-03-09' and  patient_registration.office_id= 1      
 Execution Time:0.0024509429931641

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-08' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.0014011859893799

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-08' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.0014011859893799

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
		where billing=0 and appointment_date between  '2022-03-08' and '2022-03-09' and  patient_registration.office_id= 1      
 Execution Time:0.0032520294189453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072288513183594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072288513183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072288513183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00014901161193848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034213066101074

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0047729015350342

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012600421905518

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0016300678253174

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-01' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010080337524414

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-16' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00074911117553711

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018978118896484

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018978118896484

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018978118896484

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00020790100097656

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018978118896484

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00020790100097656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018978118896484

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00020790100097656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0019738674163818

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0025508403778076

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019407272338867

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017595291137695

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018978118896484

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016999244689941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00020790100097656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001990795135498

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017094612121582

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018310546875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010423898696899

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033161640167236

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010423898696899

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033161640167236

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010423898696899

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033161640167236

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 355 
 Execution Time:0.00048708915710449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 384 
 Execution Time:0.00058197975158691

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 384  and `patient_registration_id` = 355 
 Execution Time:0.0025808811187744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028586387634277

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00060701370239258

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00060701370239258

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00033378601074219

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00060701370239258

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00033378601074219

select user_id,name from  user where user_type=6 
 Execution Time:0.0001518726348877

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00060701370239258

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00033378601074219

select user_id,name from  user where user_type=6 
 Execution Time:0.0001518726348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 3 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00094318389892578

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014939308166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.003385066986084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.003385066986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.003385066986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012369155883789

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.003385066986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00074410438537598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010011196136475

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011799335479736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 355 
 Execution Time:0.0010008811950684

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 384 
 Execution Time:0.00029993057250977

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 384  and `patient_registration_id` = 355 
 Execution Time:0.00023913383483887

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 355 
 Execution Time:0.00088191032409668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select * from examination where examination_id= '337' and   office_id= '1' 
 Execution Time:0.0036189556121826

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 337 
 Execution Time:0.008530855178833

select * from examination_chargesdetails where  examination_id= '337' 
 Execution Time:0.0025899410247803

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0060930252075195

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0060930252075195

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043106079101562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052618980407715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052618980407715

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030803680419922

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0030121803283691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00081920623779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073385238647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073385238647461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073385238647461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073385238647461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003014087677002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073385238647461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003014087677002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029120445251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073385238647461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003014087677002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00331711769104

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065207481384277

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065207481384277

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083303451538086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083303451538086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056219100952148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056219100952148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050115585327148

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050115585327148

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022602081298828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00130295753479

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00130295753479

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007469654083252

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007469654083252

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034093856811523

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-09' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.0036289691925049

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001220703125

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001220703125

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001070499420166

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001220703125

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001070499420166

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00013208389282227

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001220703125

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001070499420166

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00013208389282227

select * from investigation where  investigation_id=21  and office_id= 1 and status=1 
 Execution Time:0.00012302398681641

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001220703125

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001070499420166

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00013208389282227

select * from investigation where  investigation_id=21  and office_id= 1 and status=1 
 Execution Time:0.00012302398681641

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00010299682617188

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001220703125

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001070499420166

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00013208389282227

select * from investigation where  investigation_id=21  and office_id= 1 and status=1 
 Execution Time:0.00012302398681641

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00010299682617188

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00010395050048828

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001220703125

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001070499420166

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00013208389282227

select * from investigation where  investigation_id=21  and office_id= 1 and status=1 
 Execution Time:0.00012302398681641

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00010299682617188

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00010395050048828

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001220703125

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001070499420166

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00013208389282227

select * from investigation where  investigation_id=21  and office_id= 1 and status=1 
 Execution Time:0.00012302398681641

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00010299682617188

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00010395050048828

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00012612342834473

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-09' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.00089907646179199

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001220703125

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0001070499420166

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00013208389282227

select * from investigation where  investigation_id=21  and office_id= 1 and status=1 
 Execution Time:0.00012302398681641

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00010299682617188

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00010395050048828

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00012612342834473

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:9.0837478637695E-5

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 356 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 385 
 Execution Time:0.00023007392883301

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 385  and `patient_registration_id` = 356 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 356 
 Execution Time:0.00033307075500488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 385 
 Execution Time:0.00025701522827148

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 385  and `patient_registration_id` = 356 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00091004371643066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00091004371643066

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022940635681152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022940635681152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022940635681152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022940635681152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022940635681152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022940635681152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024871826171875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002601146697998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 355 
 Execution Time:0.00020909309387207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 384 
 Execution Time:0.00022792816162109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 384  and `patient_registration_id` = 355 
 Execution Time:0.00023412704467773

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 355 
 Execution Time:0.00070500373840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select * from examination where examination_id= '337' and   office_id= '1' 
 Execution Time:0.00085091590881348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 337 
 Execution Time:0.00065183639526367

select * from examination_chargesdetails where  examination_id= '337' 
 Execution Time:0.00038886070251465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066900253295898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066900253295898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037693977355957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066614151000977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066614151000977

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026178359985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060391426086426

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060391426086426

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033187866210938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 356 
 Execution Time:0.00066685676574707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 385 
 Execution Time:0.00029301643371582

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 385  and `patient_registration_id` = 356 
 Execution Time:0.00041699409484863

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 356 
 Execution Time:0.00095820426940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069308280944824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069308280944824

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032711029052734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087904930114746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087904930114746

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select * from examination where examination_id= '338' and   office_id= '1' 
 Execution Time:0.00066304206848145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 338 
 Execution Time:0.00040102005004883

select * from examination_chargesdetails where  examination_id= '338' 
 Execution Time:0.00042510032653809

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010819435119629

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066995620727539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select count(*) as cnt from patient_registration where  patient_registration_id= '356' and  office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_registration where  patient_registration_id= '356' and  office_id= '1' 
 Execution Time:0.00036501884460449

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=356  
 Execution Time:0.0013110637664795

select count(*) as cnt from patient_registration where  patient_registration_id= '356' and  office_id= '1' 
 Execution Time:0.00036501884460449

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=356  
 Execution Time:0.0013110637664795

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=356  
 Execution Time:0.00058507919311523

select count(*) as cnt from patient_registration where  patient_registration_id= '356' and  office_id= '1' 
 Execution Time:0.00036501884460449

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=356  
 Execution Time:0.0013110637664795

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=356  
 Execution Time:0.00058507919311523

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='356' and  office_id= '1' 
 Execution Time:0.00020313262939453

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069499015808105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069499015808105

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033879280090332

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013818740844727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 357 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 386 
 Execution Time:0.00038290023803711

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 386  and `patient_registration_id` = 357 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013549327850342

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013549327850342

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 355 
 Execution Time:0.00043392181396484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 384 
 Execution Time:0.00029492378234863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 384  and `patient_registration_id` = 355 
 Execution Time:0.00038790702819824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 355 
 Execution Time:0.00091290473937988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select * from examination where examination_id= '337' and   office_id= '1' 
 Execution Time:0.0011000633239746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 337 
 Execution Time:0.0029661655426025

select * from examination_chargesdetails where  examination_id= '337' 
 Execution Time:0.0013720989227295

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038309097290039

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038309097290039

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016059875488281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038089752197266

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038089752197266

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097298622131348

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084590911865234

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055694580078125

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00069403648376465

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0060999393463135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0036609172821045

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0036609172821045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0036609172821045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0036609172821045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012421607971191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012421607971191

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012421607971191

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012421607971191

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00087308883666992

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00087308883666992

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022482872009277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081205368041992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081205368041992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086188316345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00049018859863281

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00049018859863281

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=244  
 Execution Time:0.0025649070739746

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00049018859863281

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=244  
 Execution Time:0.0025649070739746

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=244  
 Execution Time:0.00060796737670898

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00049018859863281

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=244  
 Execution Time:0.0025649070739746

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=244  
 Execution Time:0.00060796737670898

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='244' and  office_id= '1' 
 Execution Time:0.00026702880859375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034379959106445

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00076913833618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00052404403686523

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=244  
 Execution Time:0.0029990673065186

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00052404403686523

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=244  
 Execution Time:0.0029990673065186

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=244  
 Execution Time:0.0011730194091797

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00052404403686523

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=244  
 Execution Time:0.0029990673065186

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=244  
 Execution Time:0.0011730194091797

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='244' and  office_id= '1' 
 Execution Time:0.00031280517578125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064492225646973

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064492225646973

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043988227844238

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 358 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 387 
 Execution Time:0.0003049373626709

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 387  and `patient_registration_id` = 358 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 358 
 Execution Time:0.00060796737670898

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 387 
 Execution Time:0.00062990188598633

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 387  and `patient_registration_id` = 358 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0070290565490723

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0070290565490723

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013210773468018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013210773468018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013210773468018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 351 
 Execution Time:0.00034689903259277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 380 
 Execution Time:0.0003349781036377

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 380  and `patient_registration_id` = 351 
 Execution Time:0.0003209114074707

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 351 
 Execution Time:0.0012550354003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select * from examination where examination_id= '333' and   office_id= '1' 
 Execution Time:0.00092792510986328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 333 
 Execution Time:0.00084400177001953

select * from examination_chargesdetails where  examination_id= '333' 
 Execution Time:0.00063920021057129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068402290344238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068402290344238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008699893951416

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008699893951416

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027608871459961

SELECT *
FROM `examination`
WHERE `examination_id` = 333 
 Execution Time:0.0014431476593018

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00037407875061035

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00027298927307129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 351 
 Execution Time:0.00020408630371094

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 4 
 Execution Time:0.00065398216247559

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=333 
 Execution Time:0.000885009765625

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=333 
 Execution Time:0.00048708915710449

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=333 
 Execution Time:0.00066900253295898

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=333 
 Execution Time:0.00033807754516602

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='333' and office_id='1' 
 Execution Time:0.00098991394042969

select * from examination_chargesdetails where  examination_id= '333' 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007469654083252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007469654083252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053191184997559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053191184997559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053191184997559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008690357208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053191184997559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008690357208252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053191184997559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008690357208252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058412551879883

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058412551879883

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025415420532227

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017461776733398

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017461776733398

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096607208251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096607208251953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096607208251953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019559860229492

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059700012207031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059700012207031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012922286987305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012922286987305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012922286987305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012922286987305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012922286987305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012922286987305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034093856811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012922286987305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034093856811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001349925994873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001349925994873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011069774627686

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001349925994873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011069774627686

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 359 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 388 
 Execution Time:0.00027704238891602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 388  and `patient_registration_id` = 359 
 Execution Time:0.00093293190002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066781044006348

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066781044006348

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072503089904785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072503089904785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 360 
 Execution Time:0.00090503692626953

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 389 
 Execution Time:0.00070905685424805

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 389  and `patient_registration_id` = 360 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020492076873779

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0089371204376221

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020492076873779

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0089371204376221

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020492076873779

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0089371204376221

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 360 
 Execution Time:0.00055503845214844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 389 
 Execution Time:0.00038385391235352

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 389  and `patient_registration_id` = 360 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0058250427246094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0058250427246094

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011110305786133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 357 
 Execution Time:0.00037312507629395

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 386 
 Execution Time:0.00035285949707031

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 386  and `patient_registration_id` = 357 
 Execution Time:0.00025081634521484

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 357 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select * from examination where examination_id= '339' and   office_id= '1' 
 Execution Time:0.0010151863098145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086379051208496

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 339 
 Execution Time:0.00065994262695312

select * from examination_chargesdetails where  examination_id= '339' 
 Execution Time:0.00072503089904785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081300735473633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081300735473633

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013999938964844

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00090503692626953

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00090503692626953

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036580562591553

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036580562591553

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047516822814941

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047516822814941

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00098800659179688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00098800659179688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014982223510742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014982223510742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014982223510742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014982223510742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070095062255859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014982223510742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070095062255859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0005650520324707

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00019097328186035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 361 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 390 
 Execution Time:0.00020980834960938

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 390  and `patient_registration_id` = 361 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 361 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 390 
 Execution Time:0.00015783309936523

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 390  and `patient_registration_id` = 361 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092601776123047

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092601776123047

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050020217895508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050020217895508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045585632324219

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001978874206543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00069618225097656

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00069618225097656

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005800724029541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054717063903809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054717063903809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select count(*) as cnt from patient_registration where  patient_registration_id= '359' and  office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from patient_registration where  patient_registration_id= '359' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=359  
 Execution Time:0.0031208992004395

select count(*) as cnt from patient_registration where  patient_registration_id= '359' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=359  
 Execution Time:0.0031208992004395

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=359  
 Execution Time:0.0010550022125244

select count(*) as cnt from patient_registration where  patient_registration_id= '359' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=359  
 Execution Time:0.0031208992004395

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=359  
 Execution Time:0.0010550022125244

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='359' and  office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092506408691406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092506408691406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0007021427154541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010569095611572

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011060237884521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011060237884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011060237884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00583815574646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00583815574646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00583815574646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00583815574646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00583815574646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00583815574646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048518180847168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00583815574646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048518180847168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018601417541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00583815574646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048518180847168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018601417541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009009838104248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00583815574646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048518180847168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018601417541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009009838104248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033819675445557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00583815574646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048518180847168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018601417541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009009838104248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033819675445557

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 357 
 Execution Time:0.00029611587524414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 386 
 Execution Time:0.0003049373626709

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 386  and `patient_registration_id` = 357 
 Execution Time:0.00040483474731445

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 357 
 Execution Time:0.00084209442138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090384483337402

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090384483337402

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003199577331543

select * from examination where examination_id= '339' and   office_id= '1' 
 Execution Time:0.0017969608306885

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 339 
 Execution Time:0.00082492828369141

select * from examination_chargesdetails where  examination_id= '339' 
 Execution Time:0.00054407119750977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073099136352539

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073099136352539

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014488697052002

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014488697052002

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010571479797363

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014488697052002

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010571479797363

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 364 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 393 
 Execution Time:0.00022196769714355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 393  and `patient_registration_id` = 364 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058913230895996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058913230895996

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085902214050293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085902214050293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085902214050293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018370151519775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018370151519775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018370151519775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018370151519775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018370151519775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018370151519775

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058293342590332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058293342590332

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046610832214355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051593780517578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027179718017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027179718017578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027179718017578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027179718017578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027179718017578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027179718017578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016298294067383

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039238929748535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016298294067383

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039238929748535

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016298294067383

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039238929748535

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 360 
 Execution Time:0.004176139831543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 389 
 Execution Time:0.00031805038452148

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 389  and `patient_registration_id` = 360 
 Execution Time:0.00078892707824707

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 360 
 Execution Time:0.0008690357208252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select * from examination where examination_id= '342' and   office_id= '1' 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 342 
 Execution Time:0.0007021427154541

select * from examination_chargesdetails where  examination_id= '342' 
 Execution Time:0.00043988227844238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010290145874023

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010290145874023

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010190010070801

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010190010070801

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034980773925781

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0020201206207275

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 363 
 Execution Time:0.00044703483581543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 392 
 Execution Time:0.00063586235046387

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 392  and `patient_registration_id` = 363 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015299320220947

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015299320220947

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007779598236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007779598236084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007779598236084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064706802368164

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='67' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010018348693848

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00043892860412598

select count(*) as cnt from patient_registration where  patient_registration_id= '364' and  office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from patient_registration where  patient_registration_id= '364' and  office_id= '1' 
 Execution Time:0.00034403800964355

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=364  
 Execution Time:0.0021419525146484

select count(*) as cnt from patient_registration where  patient_registration_id= '364' and  office_id= '1' 
 Execution Time:0.00034403800964355

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=364  
 Execution Time:0.0021419525146484

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=364  
 Execution Time:0.00047588348388672

select count(*) as cnt from patient_registration where  patient_registration_id= '364' and  office_id= '1' 
 Execution Time:0.00034403800964355

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=364  
 Execution Time:0.0021419525146484

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=364  
 Execution Time:0.00047588348388672

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='364' and  office_id= '1' 
 Execution Time:0.00020599365234375

select count(*) as cnt from patient_registration where  patient_registration_id= '367' and  office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from patient_registration where  patient_registration_id= '367' and  office_id= '1' 
 Execution Time:0.00034093856811523

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=367  
 Execution Time:0.0019409656524658

select count(*) as cnt from patient_registration where  patient_registration_id= '367' and  office_id= '1' 
 Execution Time:0.00034093856811523

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=367  
 Execution Time:0.0019409656524658

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=367  
 Execution Time:0.00076007843017578

select count(*) as cnt from patient_registration where  patient_registration_id= '367' and  office_id= '1' 
 Execution Time:0.00034093856811523

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=367  
 Execution Time:0.0019409656524658

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=367  
 Execution Time:0.00076007843017578

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='367' and  office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from patient_registration where  patient_registration_id= '364' and  office_id= '1' 
 Execution Time:0.00035715103149414

select count(*) as cnt from patient_registration where  patient_registration_id= '364' and  office_id= '1' 
 Execution Time:0.00035715103149414

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=364  
 Execution Time:0.0013189315795898

select count(*) as cnt from patient_registration where  patient_registration_id= '364' and  office_id= '1' 
 Execution Time:0.00035715103149414

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=364  
 Execution Time:0.0013189315795898

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=364  
 Execution Time:0.00033998489379883

select count(*) as cnt from patient_registration where  patient_registration_id= '364' and  office_id= '1' 
 Execution Time:0.00035715103149414

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=364  
 Execution Time:0.0013189315795898

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=364  
 Execution Time:0.00033998489379883

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='364' and  office_id= '1' 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011647939682007

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011647939682007

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016311883926392

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011647939682007

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016311883926392

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011647939682007

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016311883926392

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031189918518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011647939682007

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016311883926392

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031189918518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033109188079834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011647939682007

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016311883926392

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031189918518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033109188079834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024988651275635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011647939682007

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016311883926392

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031189918518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033109188079834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024988651275635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011647939682007

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016311883926392

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031189918518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033109188079834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024988651275635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033578872680664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011647939682007

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016311883926392

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031189918518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033109188079834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024988651275635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033578872680664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017249584197998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011647939682007

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.016311883926392

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031189918518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033109188079834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024988651275635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033578872680664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017249584197998

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.010130167007446

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00062108039855957

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00062108039855957

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select * from office where  office_id= '1' 
 Execution Time:0.00085091590881348

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 366 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 395 
 Execution Time:0.00023508071899414

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 395  and `patient_registration_id` = 366 
 Execution Time:0.00032377243041992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016989707946777

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016989707946777

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 365 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 394 
 Execution Time:0.00069713592529297

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 394  and `patient_registration_id` = 365 
 Execution Time:0.00069999694824219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048685073852539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048685073852539

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025820732116699

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.002061128616333

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.002061128616333

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00024819374084473

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057816505432129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057816505432129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013091564178467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013091564178467

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071406364440918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013091564178467

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020291805267334

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020291805267334

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020291805267334

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 368 
 Execution Time:0.00026988983154297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 397 
 Execution Time:0.00018191337585449

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 397  and `patient_registration_id` = 368 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015377998352051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087094306945801

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087094306945801

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027894973754883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 363 
 Execution Time:0.00049805641174316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 392 
 Execution Time:0.00053286552429199

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 392  and `patient_registration_id` = 363 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 363 
 Execution Time:0.0002129077911377

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 392 
 Execution Time:0.00018191337585449

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 392  and `patient_registration_id` = 363 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 369 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 398 
 Execution Time:0.00015997886657715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 398  and `patient_registration_id` = 369 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076818466186523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076818466186523

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031089782714844

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00099611282348633

SELECT *
FROM `examination`
WHERE `examination_id` = 347 
 Execution Time:0.0010190010070801

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00027608871459961

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0006721019744873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 368 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00074219703674316

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=347 
 Execution Time:0.0012471675872803

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=347 
 Execution Time:0.0011360645294189

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=347 
 Execution Time:0.0031890869140625

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=347 
 Execution Time:0.001492977142334

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='347' and office_id='1' 
 Execution Time:0.0012719631195068

select * from examination_chargesdetails where  examination_id= '347' 
 Execution Time:0.0014278888702393

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 368 
 Execution Time:0.00031685829162598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 397 
 Execution Time:0.00028491020202637

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 397  and `patient_registration_id` = 368 
 Execution Time:0.0007469654083252

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 368 
 Execution Time:0.0010490417480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012421607971191

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012421607971191

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select * from examination where examination_id= '347' and   office_id= '1' 
 Execution Time:0.00066685676574707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 347 
 Execution Time:0.00029802322387695

select * from examination_chargesdetails where  examination_id= '347' 
 Execution Time:0.00057411193847656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 369 
 Execution Time:0.00023293495178223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 398 
 Execution Time:0.00016307830810547

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 398  and `patient_registration_id` = 369 
 Execution Time:0.0004580020904541

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 369 
 Execution Time:0.00063800811767578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00019717216491699

select * from examination where examination_id= '349' and   office_id= '1' 
 Execution Time:0.0008699893951416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 349 
 Execution Time:0.00053596496582031

select * from examination_chargesdetails where  examination_id= '349' 
 Execution Time:0.00047397613525391

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='40' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016131401062012

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00069785118103027

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052595138549805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021100044250488

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='81' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073409080505371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065279006958008

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065279006958008

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087285041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087285041809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087285041809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00027298927307129

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00019311904907227

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051999092102051

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022602081298828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 370 
 Execution Time:0.00030899047851562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 399 
 Execution Time:0.00024604797363281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 399  and `patient_registration_id` = 370 
 Execution Time:0.00077295303344727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 370 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 399 
 Execution Time:0.00016212463378906

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 399  and `patient_registration_id` = 370 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027203559875488

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0013010501861572

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0013010501861572

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0032370090484619

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072407722473145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072407722473145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 371 
 Execution Time:0.00024795532226562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 400 
 Execution Time:0.00017118453979492

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 400  and `patient_registration_id` = 371 
 Execution Time:0.00044083595275879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 371 
 Execution Time:0.0005638599395752

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 400 
 Execution Time:0.00044608116149902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 400  and `patient_registration_id` = 371 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081992149353027

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081992149353027

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 366 
 Execution Time:0.00047588348388672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 395 
 Execution Time:0.00034904479980469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 395  and `patient_registration_id` = 366 
 Execution Time:0.00031113624572754

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 366 
 Execution Time:0.0013689994812012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021359920501709

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032997131347656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047683715820312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047683715820312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026607513427734

select * from examination where examination_id= '345' and   office_id= '1' 
 Execution Time:0.00090885162353516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 345 
 Execution Time:0.00050902366638184

select * from examination_chargesdetails where  examination_id= '345' 
 Execution Time:0.00033688545227051

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045323371887207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045323371887207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 365 
 Execution Time:0.00020813941955566

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 394 
 Execution Time:0.0001680850982666

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 394  and `patient_registration_id` = 365 
 Execution Time:0.00026988983154297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 365 
 Execution Time:0.0006561279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013279914855957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033783912658691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056886672973633

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056886672973633

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002892017364502

select * from examination where examination_id= '346' and   office_id= '1' 
 Execution Time:0.00086021423339844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 346 
 Execution Time:0.00029087066650391

select * from examination_chargesdetails where  examination_id= '346' 
 Execution Time:0.00035500526428223

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066494941711426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 370 
 Execution Time:0.00032806396484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 399 
 Execution Time:0.00031208992004395

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 399  and `patient_registration_id` = 370 
 Execution Time:0.00020599365234375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 370 
 Execution Time:0.00092101097106934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select * from examination where examination_id= '350' and   office_id= '1' 
 Execution Time:0.0010111331939697

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 350 
 Execution Time:0.00027108192443848

select * from examination_chargesdetails where  examination_id= '350' 
 Execution Time:0.00026202201843262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005497932434082

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005497932434082

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020003318786621

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073504447937012

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062394142150879

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068402290344238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 372 
 Execution Time:0.00049304962158203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 401 
 Execution Time:0.00043702125549316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 401  and `patient_registration_id` = 372 
 Execution Time:0.0022120475769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055289268493652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055289268493652

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 362 
 Execution Time:0.00069499015808105

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 391 
 Execution Time:0.00033998489379883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 391  and `patient_registration_id` = 362 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011441707611084

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011441707611084

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001194953918457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 364 
 Execution Time:0.00035786628723145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 393 
 Execution Time:0.00028491020202637

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 393  and `patient_registration_id` = 364 
 Execution Time:0.00021600723266602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 364 
 Execution Time:0.0011119842529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043582916259766

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043582916259766

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034809112548828

select * from examination where examination_id= '344' and   office_id= '1' 
 Execution Time:0.00095415115356445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 344 
 Execution Time:0.00029397010803223

select * from examination_chargesdetails where  examination_id= '344' 
 Execution Time:0.00024509429931641

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059413909912109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059413909912109

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037217140197754

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061678886413574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 363 
 Execution Time:0.00058102607727051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 392 
 Execution Time:0.00038599967956543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 392  and `patient_registration_id` = 363 
 Execution Time:0.00024890899658203

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 363 
 Execution Time:0.0007929801940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082802772521973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082802772521973

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035905838012695

select * from examination where examination_id= '348' and   office_id= '1' 
 Execution Time:0.00086712837219238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 348 
 Execution Time:0.00038695335388184

select * from examination_chargesdetails where  examination_id= '348' 
 Execution Time:0.00041699409484863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001784086227417

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001784086227417

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028300285339355

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00050091743469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 368 
 Execution Time:0.00027298927307129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 397 
 Execution Time:0.0003058910369873

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 397  and `patient_registration_id` = 368 
 Execution Time:0.00019407272338867

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 368 
 Execution Time:0.00071096420288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028300285339355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024199485778809

select * from examination where examination_id= '347' and   office_id= '1' 
 Execution Time:0.00084614753723145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 347 
 Execution Time:0.00069594383239746

select * from examination_chargesdetails where  examination_id= '347' 
 Execution Time:0.00021195411682129

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 362 
 Execution Time:0.00023913383483887

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 391 
 Execution Time:0.00017595291137695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 391  and `patient_registration_id` = 362 
 Execution Time:0.00018000602722168

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 362 
 Execution Time:0.00058293342590332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select * from examination where examination_id= '353' and   office_id= '1' 
 Execution Time:0.00072193145751953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0059909820556641

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 353 
 Execution Time:0.0012240409851074

select * from examination_chargesdetails where  examination_id= '353' 
 Execution Time:0.00049495697021484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032689571380615

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032689571380615

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010459423065186

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.009721040725708

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.009721040725708

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028231143951416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016279220581055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016279220581055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016279220581055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 362 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 391 
 Execution Time:0.00020098686218262

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 391  and `patient_registration_id` = 362 
 Execution Time:0.00049400329589844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 362 
 Execution Time:0.0011270046234131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select * from examination where examination_id= '353' and   office_id= '1' 
 Execution Time:0.0010638236999512

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 353 
 Execution Time:0.00031590461730957

select * from examination_chargesdetails where  examination_id= '353' 
 Execution Time:0.00032901763916016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019991397857666

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084614753723145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084614753723145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00053691864013672

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00054597854614258

SELECT *
FROM `examination`
WHERE `examination_id` = 340 
 Execution Time:0.00069499015808105

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0013351440429688

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00040292739868164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 358 
 Execution Time:0.0002751350402832

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00038003921508789

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=340 
 Execution Time:0.0011420249938965

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=340 
 Execution Time:0.00054502487182617

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=340 
 Execution Time:0.00045299530029297

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=340 
 Execution Time:0.00028395652770996

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='340' and office_id='1' 
 Execution Time:0.00090408325195312

select * from examination_chargesdetails where  examination_id= '340' 
 Execution Time:0.00021219253540039

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 358 
 Execution Time:0.00025296211242676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 387 
 Execution Time:0.00015616416931152

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 387  and `patient_registration_id` = 358 
 Execution Time:0.000244140625

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 358 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049996376037598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065493583679199

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065493583679199

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select * from examination where examination_id= '340' and   office_id= '1' 
 Execution Time:0.00072693824768066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 340 
 Execution Time:0.00027799606323242

select * from examination_chargesdetails where  examination_id= '340' 
 Execution Time:0.00015115737915039

SELECT *
FROM `examination`
WHERE `examination_id` = 340 
 Execution Time:0.00070405006408691

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00031399726867676

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00041699409484863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 358 
 Execution Time:0.00021195411682129

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00034880638122559

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=340 
 Execution Time:0.00065207481384277

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=340 
 Execution Time:0.00034403800964355

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=340 
 Execution Time:0.00025606155395508

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=340 
 Execution Time:0.00015592575073242

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='340' and office_id='1' 
 Execution Time:0.00055909156799316

select * from examination_chargesdetails where  examination_id= '340' 
 Execution Time:0.00017285346984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087404251098633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087404251098633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059819221496582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059819221496582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059819221496582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059819221496582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070095062255859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059819221496582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070095062255859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000823974609375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000823974609375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0009160041809082

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0009160041809082

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084185600280762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084185600280762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084185600280762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005640983581543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005640983581543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022983551025391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058579444885254

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058579444885254

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024468898773193

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069904327392578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069904327392578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033283233642578

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054383277893066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001223087310791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054383277893066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001223087310791

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037858486175537

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 373 
 Execution Time:0.0004580020904541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 402 
 Execution Time:0.00045609474182129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 402  and `patient_registration_id` = 373 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 373 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 402 
 Execution Time:0.00043988227844238

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 402  and `patient_registration_id` = 373 
 Execution Time:0.00063991546630859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00095081329345703

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00095081329345703

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021886825561523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044703483581543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076389312744141

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076389312744141

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 371 
 Execution Time:0.00049281120300293

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 400 
 Execution Time:0.00035691261291504

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 400  and `patient_registration_id` = 371 
 Execution Time:0.00044894218444824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 371 
 Execution Time:0.0011558532714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024199485778809

select * from examination where examination_id= '351' and   office_id= '1' 
 Execution Time:0.00082182884216309

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 351 
 Execution Time:0.00063800811767578

select * from examination_chargesdetails where  examination_id= '351' 
 Execution Time:0.0010139942169189

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 372 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 401 
 Execution Time:0.00023388862609863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 401  and `patient_registration_id` = 372 
 Execution Time:0.00022196769714355

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 372 
 Execution Time:0.00090599060058594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0095789432525635

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001162052154541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001162052154541

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select * from examination where examination_id= '352' and   office_id= '1' 
 Execution Time:0.0045480728149414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 352 
 Execution Time:0.0028228759765625

select * from examination_chargesdetails where  examination_id= '352' 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 371 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 400 
 Execution Time:0.00022101402282715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 400  and `patient_registration_id` = 371 
 Execution Time:0.00036215782165527

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 371 
 Execution Time:0.0010039806365967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select * from examination where examination_id= '351' and   office_id= '1' 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003812313079834

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 351 
 Execution Time:0.00034499168395996

select * from examination_chargesdetails where  examination_id= '351' 
 Execution Time:0.00025296211242676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063490867614746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063490867614746

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034093856811523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087189674377441

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087189674377441

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='73' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016090869903564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.00084209442138672

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.00084209442138672

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
		where billing=0 and appointment_date between  '2022-03-09' and '2022-03-09' and  patient_registration.office_id= 1      
 Execution Time:0.0031790733337402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.0012688636779785

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.0012688636779785

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
		where billing=0 and appointment_date between  '2022-03-09' and '2022-03-09' and  patient_registration.office_id= 1      
 Execution Time:0.0027759075164795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044488906860352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044488906860352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00090885162353516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00090885162353516

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 374 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 403 
 Execution Time:0.00028681755065918

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 403  and `patient_registration_id` = 374 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.0010559558868408

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.0010559558868408

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
		where billing=0 and appointment_date between  '2022-03-09' and '2022-03-09' and  patient_registration.office_id= 1      
 Execution Time:0.003695011138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.00118088722229

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-09' and  '2022-03-09' and  billing_master.office_id= 1        
 Execution Time:0.00118088722229

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
		where billing=0 and appointment_date between  '2022-03-09' and '2022-03-09' and  patient_registration.office_id= 1      
 Execution Time:0.0021870136260986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 359 
 Execution Time:0.00047779083251953

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 388 
 Execution Time:0.00030994415283203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 388  and `patient_registration_id` = 359 
 Execution Time:0.00039005279541016

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 359 
 Execution Time:0.00095796585083008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032615661621094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077486038208008

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077486038208008

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002129077911377

select * from examination where examination_id= '341' and   office_id= '1' 
 Execution Time:0.0010130405426025

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 341 
 Execution Time:0.00055289268493652

select * from examination_chargesdetails where  examination_id= '341' 
 Execution Time:0.00037884712219238

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00066781044006348

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013759136199951

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013759136199951

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00041890144348145

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-01' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00065517425537109

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-05' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001399040222168

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00082182884216309

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00070810317993164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 301 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 330 
 Execution Time:0.00040793418884277

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 330  and `patient_registration_id` = 301 
 Execution Time:0.00024795532226562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 301 
 Execution Time:0.00076103210449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002291202545166

select * from examination where examination_id= '282' and   office_id= '1' 
 Execution Time:0.00083804130554199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 282 
 Execution Time:0.00023794174194336

select * from examination_chargesdetails where  examination_id= '282' 
 Execution Time:0.00028014183044434

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001039981842041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001039981842041

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00087189674377441

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00087189674377441

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00087189674377441

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013494491577148

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='36' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00085806846618652

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='36' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00085806846618652

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00032711029052734

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='36' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00085806846618652

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00032711029052734

select user_id,name from  user where user_type=6 
 Execution Time:0.00033187866210938

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='36' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00085806846618652

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00032711029052734

select user_id,name from  user where user_type=6 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00019979476928711

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012540817260742

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012540817260742

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 321 
 Execution Time:0.00020289421081543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 347 
 Execution Time:0.00014996528625488

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 347  and `patient_registration_id` = 321 
 Execution Time:0.00021505355834961

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 321 
 Execution Time:0.0006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select * from examination where examination_id= '300' and   office_id= '1' 
 Execution Time:0.0011401176452637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 300 
 Execution Time:0.00029897689819336

select * from examination_chargesdetails where  examination_id= '300' 
 Execution Time:0.00041413307189941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036311149597168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020194053649902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 323 
 Execution Time:0.00027203559875488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 349 
 Execution Time:0.00034403800964355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 349  and `patient_registration_id` = 323 
 Execution Time:0.00024890899658203

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 323 
 Execution Time:0.00060415267944336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select * from examination where examination_id= '302' and   office_id= '1' 
 Execution Time:0.00088787078857422

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 302 
 Execution Time:0.00025606155395508

select * from examination_chargesdetails where  examination_id= '302' 
 Execution Time:0.00029683113098145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013151168823242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013151168823242

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032687187194824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049209594726562

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00045490264892578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 319 
 Execution Time:0.00028014183044434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 345 
 Execution Time:0.0002439022064209

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 345  and `patient_registration_id` = 319 
 Execution Time:0.0003058910369873

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 319 
 Execution Time:0.00097107887268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select * from examination where examination_id= '298' and   office_id= '1' 
 Execution Time:0.00091719627380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 298 
 Execution Time:0.00039291381835938

select * from examination_chargesdetails where  examination_id= '298' 
 Execution Time:0.00047492980957031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046610832214355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046610832214355

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092601776123047

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092601776123047

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003058910369873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 344 
 Execution Time:0.00029706954956055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 373 
 Execution Time:0.00019121170043945

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 373  and `patient_registration_id` = 344 
 Execution Time:0.00016999244689941

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 344 
 Execution Time:0.00061583518981934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select * from examination where examination_id= '332' and   office_id= '1' 
 Execution Time:0.00080084800720215

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 332 
 Execution Time:0.00020408630371094

select * from examination_chargesdetails where  examination_id= '332' 
 Execution Time:0.00017380714416504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030517578125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060319900512695

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060319900512695

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098991394042969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 349 
 Execution Time:0.00021696090698242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 378 
 Execution Time:0.00015997886657715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 378  and `patient_registration_id` = 349 
 Execution Time:0.00030708312988281

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 349 
 Execution Time:0.00062203407287598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select * from examination where examination_id= '331' and   office_id= '1' 
 Execution Time:0.00069308280944824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030190944671631

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 331 
 Execution Time:0.00016999244689941

select * from examination_chargesdetails where  examination_id= '331' 
 Execution Time:0.00014519691467285

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0029520988464355

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0029520988464355

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00024795532226562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 358 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 387 
 Execution Time:0.00042891502380371

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 387  and `patient_registration_id` = 358 
 Execution Time:0.00035715103149414

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 358 
 Execution Time:0.0010120868682861

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005180835723877

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005180835723877

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select * from examination where examination_id= '340' and   office_id= '1' 
 Execution Time:0.00076007843017578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 340 
 Execution Time:0.00020003318786621

select * from examination_chargesdetails where  examination_id= '340' 
 Execution Time:0.0001828670501709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034213066101074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034213066101074

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 357 
 Execution Time:0.00027585029602051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 386 
 Execution Time:0.00017905235290527

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 386  and `patient_registration_id` = 357 
 Execution Time:0.00014686584472656

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 357 
 Execution Time:0.000640869140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select * from examination where examination_id= '339' and   office_id= '1' 
 Execution Time:0.00064992904663086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 339 
 Execution Time:0.00013399124145508

select * from examination_chargesdetails where  examination_id= '339' 
 Execution Time:0.00012993812561035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038385391235352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045490264892578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045490264892578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023412704467773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 359 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 388 
 Execution Time:0.00020813941955566

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 388  and `patient_registration_id` = 359 
 Execution Time:0.00029301643371582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 359 
 Execution Time:0.00095510482788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select * from examination where examination_id= '341' and   office_id= '1' 
 Execution Time:0.00088214874267578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 341 
 Execution Time:0.0002288818359375

select * from examination_chargesdetails where  examination_id= '341' 
 Execution Time:0.00017404556274414

select * from examination where examination_id= '341' and   office_id= '1' 
 Execution Time:0.00088214874267578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 341 
 Execution Time:0.0002288818359375

select * from examination_chargesdetails where  examination_id= '341' 
 Execution Time:0.00017404556274414

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00021195411682129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005488395690918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005488395690918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select * from investigation where  investigation_id=10  and office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 360 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 389 
 Execution Time:0.00020885467529297

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 389  and `patient_registration_id` = 360 
 Execution Time:0.0001671314239502

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 360 
 Execution Time:0.00063109397888184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select * from examination where examination_id= '342' and   office_id= '1' 
 Execution Time:0.00077605247497559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029160976409912

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 342 
 Execution Time:0.0003509521484375

select * from examination_chargesdetails where  examination_id= '342' 
 Execution Time:0.00021600723266602

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038661956787109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038661956787109

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010101795196533

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010101795196533

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010101795196533

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017213821411133

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010101795196533

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017213821411133

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014209747314453

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010101795196533

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017213821411133

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014209747314453

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016093254089355

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010101795196533

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017213821411133

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014209747314453

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016093254089355

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00015091896057129

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010101795196533

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00017213821411133

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014209747314453

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00016093254089355

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00015091896057129

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001380443572998

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00085186958312988

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-09' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00085186958312988

select * from laser where  laser_id=4  and office_id= 1 and status=1 
 Execution Time:0.001187801361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009920597076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009920597076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009920597076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009920597076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013220310211182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009920597076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013220310211182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009920597076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013220310211182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0025019645690918

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select * from medicine where medicine_id='27' and office_id= '1' 
 Execution Time:0.00065708160400391

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017209053039551

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017209053039551

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0027270317077637

select count(*) as cnt from medicine_instruction where  name = '121' and office_id= '1' 
 Execution Time:0.00036096572875977

select * from medicine_instruction where medicine_instruction_id='17' and office_id= '1' 
 Execution Time:0.00048708915710449

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select * from medicine_instruction where medicine_instruction_id='17' and office_id= '1' 
 Execution Time:0.00048708915710449

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from medicine where  name = '1' and office_id= '1' 
 Execution Time:0.00058197975158691

select * from medicine where medicine_id='28' and office_id= '1' 
 Execution Time:0.00068306922912598

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select * from medicine where medicine_id='28' and office_id= '1' 
 Execution Time:0.00068306922912598

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00019121170043945

select count(*) as cnt from medicine where  name = 'sdasd' and office_id= '1' 
 Execution Time:0.00042891502380371

select * from medicine where medicine_id='29' and office_id= '1' 
 Execution Time:0.00057196617126465

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select * from medicine where medicine_id='29' and office_id= '1' 
 Execution Time:0.00057196617126465

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.00019311904907227

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 236  and `patient_registration_id` = 183 
 Execution Time:0.00024294853210449

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.0008242130279541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00060701370239258

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00050497055053711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080490112304688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080490112304688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.004565954208374

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.004565954208374

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00044798851013184

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00031208992004395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.00023317337036133

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.00015687942504883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 236  and `patient_registration_id` = 183 
 Execution Time:0.00022101402282715

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.0009770393371582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00043487548828125

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00042510032653809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067019462585449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067019462585449

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029993057250977

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00040698051452637

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054192543029785

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00049304962158203

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00042915344238281

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052690505981445

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00049996376037598

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00046515464782715

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056290626525879

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005180835723877

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00034213066101074

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067496299743652

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00033807754516602

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0004889965057373

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00035715103149414

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00040102005004883

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00036096572875977

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00034499168395996

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00046896934509277

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00035500526428223

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00051379203796387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.00089693069458008

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.00051498413085938

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 236  and `patient_registration_id` = 183 
 Execution Time:0.00044488906860352

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.0013120174407959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.0009770393371582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00062894821166992

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00036501884460449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010709762573242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010709762573242

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044417381286621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063085556030273

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063085556030273

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030994415283203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.0002291202545166

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 236  and `patient_registration_id` = 183 
 Execution Time:0.00043010711669922

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013279914855957

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.00093603134155273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00041604042053223

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00035405158996582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054216384887695

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054216384887695

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002892017364502

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.00048089027404785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.00020599365234375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 236  and `patient_registration_id` = 183 
 Execution Time:0.00023198127746582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.00071120262145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044488906860352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044488906860352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028014183044434

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051093101501465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051093101501465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032782554626465

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.001093864440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00057101249694824

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00047802925109863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.00032210350036621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.00022411346435547

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 236  and `patient_registration_id` = 183 
 Execution Time:0.00021791458129883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.00050592422485352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.00081992149353027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00029897689819336

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00023603439331055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054311752319336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054311752319336

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033783912658691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068306922912598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068306922912598

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032305717468262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.00027704238891602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.00032210350036621

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 236  and `patient_registration_id` = 183 
 Execution Time:0.00020813941955566

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.00084614753723145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00029206275939941

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00024199485778809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059986114501953

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059986114501953

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031113624572754

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001384973526001

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='29' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056695938110352

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0006248950958252

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.00018596649169922

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 236  and `patient_registration_id` = 183 
 Execution Time:0.00015497207641602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.00060486793518066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.0003058910369873

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00040602684020996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035905838012695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002598762512207

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00080394744873047

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='29' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00045680999755859

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012609958648682

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='29' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00039386749267578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.00017094612121582

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 236  and `patient_registration_id` = 183 
 Execution Time:0.00014495849609375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.00078892707824707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00028300285339355

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00021004676818848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042486190795898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042486190795898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032305717468262

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056290626525879

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='29' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00041484832763672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002720832824707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002720832824707

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select * from medicine where medicine_id='97' and office_id= '1' 
 Execution Time:0.00087690353393555

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select * from medicine where medicine_id='97' and office_id= '1' 
 Execution Time:0.00087690353393555

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 361 
 Execution Time:0.00051403045654297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 390 
 Execution Time:0.00051403045654297

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 390  and `patient_registration_id` = 361 
 Execution Time:0.00049901008605957

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 361 
 Execution Time:0.0013439655303955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select * from examination where examination_id= '343' and   office_id= '1' 
 Execution Time:0.00058412551879883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 343 
 Execution Time:0.00075697898864746

select * from examination_chargesdetails where  examination_id= '343' 
 Execution Time:0.00060105323791504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097107887268066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097107887268066

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006561279296875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006561279296875

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020503997802734

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007169246673584

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.00034213066101074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.00046491622924805

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 236  and `patient_registration_id` = 183 
 Execution Time:0.00028395652770996

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.0008399486541748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00061702728271484

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.0006251335144043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064611434936523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064611434936523

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088405609130859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088405609130859

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034689903259277

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00082087516784668

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061321258544922

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010910034179688

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='29' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093889236450195

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066709518432617

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='29' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079798698425293


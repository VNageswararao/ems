select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019772052764893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019772052764893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020389556884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019772052764893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020389556884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019772052764893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020389556884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019772052764893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020389556884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022060871124268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019772052764893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020389556884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022060871124268

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054709911346436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044469833374023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044469833374023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050411224365234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044469833374023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050411224365234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044469833374023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050411224365234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.0016791820526123

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.0016791820526123

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-20' and '2021-12-20' and  patient_registration.office_id= 1      
 Execution Time:0.0032341480255127

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.001317024230957

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.001317024230957

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-20' and '2021-12-20' and  patient_registration.office_id= 1      
 Execution Time:0.0033440589904785

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.001511812210083

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.001511812210083

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-20' and '2021-12-20' and  patient_registration.office_id= 1      
 Execution Time:0.0032908916473389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004570484161377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004570484161377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004570484161377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004570484161377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060610771179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071029663085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071029663085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071029663085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071029663085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.00089406967163086

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.00089406967163086

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-20' and '2021-12-20' and  patient_registration.office_id= 1      
 Execution Time:0.0028550624847412

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.0019168853759766

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.0019168853759766

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-20' and '2021-12-20' and  patient_registration.office_id= 1      
 Execution Time:0.0051641464233398

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.0017919540405273

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.0017919540405273

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-20' and '2021-12-20' and  patient_registration.office_id= 1      
 Execution Time:0.0029098987579346

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.0023539066314697

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.0023539066314697

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-20' and '2021-12-20' and  patient_registration.office_id= 1      
 Execution Time:0.0054981708526611

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.00142502784729

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.00142502784729

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-20' and '2021-12-20' and  patient_registration.office_id= 1      
 Execution Time:0.0050508975982666

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.001478910446167

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.001478910446167

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-20' and '2021-12-20' and  patient_registration.office_id= 1      
 Execution Time:0.0045411586761475

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076470375061035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076470375061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076470375061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076470375061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.0014750957489014

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-20' and  '2021-12-20' and  billing_master.office_id= 1        
 Execution Time:0.0014750957489014

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-20' and '2021-12-20' and  patient_registration.office_id= 1      
 Execution Time:0.0034210681915283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045359134674072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045359134674072

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045359134674072

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045359134674072

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013117790222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045359134674072

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013117790222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063669681549072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040581226348877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.035663843154907

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.035663843154907

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.035663843154907

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0076098442077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.035663843154907

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0076098442077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0071640014648438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.035663843154907

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0076098442077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0071640014648438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047760009765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.035663843154907

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0076098442077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0071640014648438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047760009765625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.035663843154907

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0076098442077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0071640014648438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047760009765625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047540664672852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.035663843154907

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0076098442077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0071640014648438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047760009765625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047540664672852

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00055503845214844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00079202651977539

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00055503845214844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00079202651977539

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00057721138000488

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00072288513183594

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00072288513183594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031299591064453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031299591064453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031299591064453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026929378509521

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00055909156799316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 99 
 Execution Time:0.0021059513092041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00026178359985352

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 99 
 Execution Time:0.00063085556030273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098705291748047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00028419494628906

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00080394744873047

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00028419494628906

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00080394744873047

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048112869262695

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00028419494628906

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00080394744873047

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048112869262695

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0003511905670166

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048589706420898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048589706420898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030398368835449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 99 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00033307075500488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00025320053100586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00036215782165527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00030684471130371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00039410591125488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00015997886657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00037693977355957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00022506713867188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00014090538024902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00030398368835449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 68 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00072407722473145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00075221061706543

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00037002563476562

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00072407722473145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00075221061706543

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00037002563476562

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00058889389038086

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00072407722473145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00075221061706543

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00037002563476562

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00058889389038086

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0001521110534668

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031304359436035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 99 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00060915946960449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 99 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373


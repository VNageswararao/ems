select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026509761810303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026509761810303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026509761810303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024411678314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026509761810303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024411678314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026509761810303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024411678314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022110939025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026509761810303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024411678314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022110939025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026509761810303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024411678314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022110939025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021598339080811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019741058349609

select count(*) as cnt from patient_registration where  patient_registration_id= '509' and  office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from patient_registration where  patient_registration_id= '509' and  office_id= '1' 
 Execution Time:0.00060892105102539

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=509  
 Execution Time:0.0029630661010742

select count(*) as cnt from patient_registration where  patient_registration_id= '509' and  office_id= '1' 
 Execution Time:0.00060892105102539

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=509  
 Execution Time:0.0029630661010742

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=509  
 Execution Time:0.0010199546813965

select count(*) as cnt from patient_registration where  patient_registration_id= '509' and  office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from patient_registration where  patient_registration_id= '509' and  office_id= '1' 
 Execution Time:0.00037217140197754

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=509  
 Execution Time:0.0016560554504395

select count(*) as cnt from patient_registration where  patient_registration_id= '509' and  office_id= '1' 
 Execution Time:0.00037217140197754

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=509  
 Execution Time:0.0016560554504395

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=509  
 Execution Time:0.00043606758117676

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034379959106445

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034379959106445

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033020973205566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033020973205566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033020973205566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033020973205566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033020973205566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047516822814941

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047516822814941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026702880859375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087499618530273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087499618530273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003943920135498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003943920135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003943920135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025761127471924

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003943920135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028719902038574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025761127471924

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0086710453033447

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.00076889991760254

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.00076889991760254

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0024049282073975

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-16' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.002173900604248

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-16' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.002173900604248

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
		where billing=0 and appointment_date between  '2022-03-16' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0048799514770508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062394142150879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013158321380615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062394142150879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013158321380615

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013861656188965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013861656188965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049614906311035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091981887817383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049614906311035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091981887817383

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select count(*) as cnt from source where  name = 'DOCTOR REF' and office_id= '1' 
 Execution Time:0.00063514709472656

select count(*) as cnt from patient_title where  name = 'BABYGIRL' and office_id= '1' 
 Execution Time:0.00071215629577637

select count(*) as cnt from patient_title where  name = 'BABYBOY' and office_id= '1' 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018599033355713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035881996154785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035881996154785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035881996154785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035881996154785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035881996154785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005640983581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012540817260742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005640983581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012540817260742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076699256896973

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076699256896973

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0055410861968994

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0055410861968994

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021958351135254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0055410861968994

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021958351135254

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0055410861968994

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021958351135254

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 48 
 Execution Time:0.00034308433532715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 49 
 Execution Time:0.00022697448730469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 49  and `patient_registration_id` = 48 
 Execution Time:0.027866840362549

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 48 
 Execution Time:0.0023951530456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select * from examination where examination_id= '44' and   office_id= '1' 
 Execution Time:0.0011758804321289

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 44 
 Execution Time:0.003403902053833

select * from examination_chargesdetails where  examination_id= '44' 
 Execution Time:0.0031490325927734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0096480846405029

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0096480846405029

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032899379730225

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032758712768555

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032758712768555

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011181831359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011181831359863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011181831359863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011181831359863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011181831359863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011181831359863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011181831359863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025219917297363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011181831359863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025219917297363

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002284049987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011181831359863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025219917297363

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002284049987793

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011711120605469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087499618530273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087499618530273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087499618530273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 514 
 Execution Time:0.00032210350036621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 572 
 Execution Time:0.00026297569274902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 572  and `patient_registration_id` = 514 
 Execution Time:0.0003972053527832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010077953338623

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010077953338623

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010077953338623

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010077953338623

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 514 
 Execution Time:0.00050711631774902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 572 
 Execution Time:0.00056219100952148

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 572  and `patient_registration_id` = 514 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00097513198852539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00097513198852539

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055289268493652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055289268493652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019598007202148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076413154602051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076413154602051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093603134155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093603134155273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011031627655029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093603134155273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011031627655029

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008690357208252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008690357208252

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000701904296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000701904296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00060486793518066

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00060486793518066

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044488906860352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044488906860352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073790550231934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073790550231934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073790550231934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 515 
 Execution Time:0.00044012069702148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 573 
 Execution Time:0.00039911270141602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 573  and `patient_registration_id` = 515 
 Execution Time:0.00055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 515 
 Execution Time:0.00043606758117676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 573 
 Execution Time:0.00053596496582031

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 573  and `patient_registration_id` = 515 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009920597076416

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009920597076416

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041484832763672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 516 
 Execution Time:0.00027108192443848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 574 
 Execution Time:0.00018215179443359

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 574  and `patient_registration_id` = 516 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085806846618652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085806846618652

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 514 
 Execution Time:0.00046014785766602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 572 
 Execution Time:0.00056099891662598

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 572  and `patient_registration_id` = 514 
 Execution Time:0.00057888031005859

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 514 
 Execution Time:0.0011510848999023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011131763458252

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00080394744873047

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00080394744873047

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select * from examination where examination_id= '499' and   office_id= '1' 
 Execution Time:0.0008389949798584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 499 
 Execution Time:0.00086402893066406

select * from examination_chargesdetails where  examination_id= '499' 
 Execution Time:0.0014650821685791

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014290809631348

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014290809631348

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045418739318848

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.023266077041626

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072097778320312

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052404403686523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062084197998047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062084197998047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036978721618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011210441589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017218589782715

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017218589782715

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056314468383789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056314468383789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085592269897461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085592269897461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 517 
 Execution Time:0.00022196769714355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 575 
 Execution Time:0.00016999244689941

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 575  and `patient_registration_id` = 517 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013480186462402

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013480186462402

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013480186462402

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 517 
 Execution Time:0.0002448558807373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 575 
 Execution Time:0.00019311904907227

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 575  and `patient_registration_id` = 517 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082492828369141

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082492828369141

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00056815147399902

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00056815147399902

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096511840820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096511840820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016059875488281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096511840820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016059875488281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00073099136352539

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00073099136352539

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037121772766113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011720657348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011720657348633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011720657348633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 516 
 Execution Time:0.00040912628173828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 574 
 Execution Time:0.00029587745666504

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 574  and `patient_registration_id` = 516 
 Execution Time:0.00037097930908203

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 516 
 Execution Time:0.0011768341064453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select * from examination where examination_id= '501' and   office_id= '1' 
 Execution Time:0.00060606002807617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 501 
 Execution Time:0.00039386749267578

select * from examination_chargesdetails where  examination_id= '501' 
 Execution Time:0.00034499168395996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086307525634766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086307525634766

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00095009803771973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00095009803771973

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076913833618164

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='54' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00080704689025879

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075697898864746

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00069499015808105

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040483474731445

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026202201843262

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013220310211182

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 515 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 573 
 Execution Time:0.00018095970153809

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 573  and `patient_registration_id` = 515 
 Execution Time:0.00015592575073242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 515 
 Execution Time:0.0012068748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088906288146973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088906288146973

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068187713623047

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068187713623047

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select * from examination where examination_id= '500' and   office_id= '1' 
 Execution Time:0.0012621879577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 500 
 Execution Time:0.00066113471984863

select * from examination_chargesdetails where  examination_id= '500' 
 Execution Time:0.00057506561279297

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='101' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071191787719727

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001978874206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026500225067139

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026500225067139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011425018310547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026500225067139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011425018310547

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026500225067139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011425018310547

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-16' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0016648769378662

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-16' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0016648769378662

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
		where billing=0 and appointment_date between  '2022-03-16' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0053160190582275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020003318786621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 519 
 Execution Time:0.0005040168762207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 577 
 Execution Time:0.00037503242492676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 577  and `patient_registration_id` = 519 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0080997943878174

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0080997943878174

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028588771820068

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0080997943878174

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028588771820068

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0064499378204346

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0080997943878174

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028588771820068

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0064499378204346

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 519 
 Execution Time:0.00069403648376465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 577 
 Execution Time:0.00037479400634766

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 577  and `patient_registration_id` = 519 
 Execution Time:0.00068306922912598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083279609680176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083279609680176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014169216156006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083279609680176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014169216156006

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 500 
 Execution Time:0.00045180320739746

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 556 
 Execution Time:0.00037503242492676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 556  and `patient_registration_id` = 500 
 Execution Time:0.00043988227844238

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 500 
 Execution Time:0.0017838478088379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056219100952148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056219100952148

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003199577331543

select * from examination where examination_id= '489' and   office_id= '1' 
 Execution Time:0.0086178779602051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0085909366607666

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 489 
 Execution Time:0.0075469017028809

select * from examination_chargesdetails where  examination_id= '489' 
 Execution Time:0.0093891620635986

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037529468536377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037529468536377

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 517 
 Execution Time:0.00058412551879883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 575 
 Execution Time:0.0003659725189209

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 575  and `patient_registration_id` = 517 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030207633972168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039029121398926

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039029121398926

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037319660186768

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039029121398926

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 506 
 Execution Time:0.0044372081756592

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 564 
 Execution Time:0.003371000289917

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 564  and `patient_registration_id` = 506 
 Execution Time:0.0037679672241211

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 506 
 Execution Time:0.0039329528808594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036401748657227

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 506 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 564 
 Execution Time:0.0002601146697998

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 564  and `patient_registration_id` = 506 
 Execution Time:0.00028491020202637

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 506 
 Execution Time:0.00095701217651367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037190914154053

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037190914154053

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.001190185546875

select * from examination where examination_id= '492' and   office_id= '1' 
 Execution Time:0.003464937210083

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0077409744262695

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 492 
 Execution Time:0.011836051940918

select * from examination_chargesdetails where  examination_id= '492' 
 Execution Time:0.0079967975616455

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021140575408936

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021140575408936

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044107437133789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 511 
 Execution Time:0.00036406517028809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 569 
 Execution Time:0.00027990341186523

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 569  and `patient_registration_id` = 511 
 Execution Time:0.00025296211242676

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 511 
 Execution Time:0.0017271041870117

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select * from examination where examination_id= '496' and   office_id= '1' 
 Execution Time:0.00061488151550293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 496 
 Execution Time:0.00034308433532715

select * from examination_chargesdetails where  examination_id= '496' 
 Execution Time:0.00022196769714355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00105881690979

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00105881690979

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034284591674805

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0017688274383545

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0017688274383545

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0017688274383545

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00043082237243652

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0017688274383545

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00043082237243652

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00025796890258789

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-16' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011742115020752

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-16' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011742115020752

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00027203559875488

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-16' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011742115020752

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00027203559875488

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='67' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00089383125305176

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='67' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00089383125305176

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00053715705871582

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='67' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00089383125305176

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00053715705871582

select user_id,name from  user where user_type=6 
 Execution Time:0.00062894821166992

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='67' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00089383125305176

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00053715705871582

select user_id,name from  user where user_type=6 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024700164794922

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0020840167999268

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0020840167999268

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0017800331115723

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0020840167999268

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0017800331115723

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.000244140625

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0020840167999268

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0017800331115723

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.000244140625

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023412704467773

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00090193748474121

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 517 
 Execution Time:0.00030708312988281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 575 
 Execution Time:0.00026106834411621

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 575  and `patient_registration_id` = 517 
 Execution Time:0.0002448558807373

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 517 
 Execution Time:0.0010299682617188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select * from examination where examination_id= '503' and   office_id= '1' 
 Execution Time:0.00097203254699707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 503 
 Execution Time:0.013386011123657

select * from examination_chargesdetails where  examination_id= '503' 
 Execution Time:0.01117205619812

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080299377441406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080299377441406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058102607727051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068497657775879

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068497657775879

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029087066650391

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='69' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0009300708770752

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='69' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0009300708770752

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='69' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0009300708770752

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select user_id,name from  user where user_type=6 
 Execution Time:0.00054192543029785

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='69' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0009300708770752

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select user_id,name from  user where user_type=6 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024199485778809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 518 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 576 
 Execution Time:0.00017881393432617

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 576  and `patient_registration_id` = 518 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 518 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 576 
 Execution Time:0.00024509429931641

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 576  and `patient_registration_id` = 518 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 518 
 Execution Time:0.00025486946105957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 576 
 Execution Time:0.00018310546875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 576  and `patient_registration_id` = 518 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028300285339355

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060510635375977

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011260509490967

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011260509490967

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011260509490967

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00029277801513672

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00046300888061523

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='70' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00083017349243164

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='70' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00083017349243164

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0010161399841309

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='70' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00083017349243164

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0010161399841309

select user_id,name from  user where user_type=6 
 Execution Time:0.00020790100097656

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='70' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00083017349243164

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0010161399841309

select user_id,name from  user where user_type=6 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033116340637207

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013689994812012

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013689994812012

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00029897689819336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 520 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 578 
 Execution Time:0.00019979476928711

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 578  and `patient_registration_id` = 520 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060486793518066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060486793518066

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010092258453369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010092258453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010092258453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010092258453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010092258453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010092258453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010092258453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010092258453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010092258453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010092258453369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028514862060547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '7' and office_id= '1' 
 Execution Time:0.00070285797119141

select count(*) as cnt from patient_title where  patient_title_id = '7' and office_id= '1' 
 Execution Time:0.00070285797119141

select gender from patient_title where  patient_title_id = '7' and office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00068306922912598

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00068306922912598

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083303451538086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083303451538086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00038385391235352

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064396858215332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064396858215332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013818740844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013818740844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016920566558838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013818740844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016920566558838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013818740844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016920566558838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002924919128418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0084519386291504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 520 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 578 
 Execution Time:0.00022196769714355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 578  and `patient_registration_id` = 520 
 Execution Time:0.00027608871459961

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 520 
 Execution Time:0.00086498260498047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098800659179688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098800659179688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select * from examination where examination_id= '505' and   office_id= '1' 
 Execution Time:0.0013329982757568

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 505 
 Execution Time:0.00097799301147461

select * from examination_chargesdetails where  examination_id= '505' 
 Execution Time:0.00073409080505371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078892707824707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078892707824707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033903121948242

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00098800659179688

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0054869651794434

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011558532714844

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079083442687988

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00083398818969727

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='104' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00038290023803711

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='103' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093507766723633

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.005936861038208

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.005936861038208

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002683162689209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.005936861038208

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002683162689209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 518 
 Execution Time:0.0015661716461182

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 576 
 Execution Time:0.00032496452331543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 576  and `patient_registration_id` = 518 
 Execution Time:0.00050187110900879

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 518 
 Execution Time:0.0022120475769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select * from examination where examination_id= '504' and   office_id= '1' 
 Execution Time:0.0010709762573242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 504 
 Execution Time:0.00029516220092773

select * from examination_chargesdetails where  examination_id= '504' 
 Execution Time:0.00060486793518066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.021290063858032

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.021290063858032

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010459423065186

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011470317840576

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011470317840576

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022139549255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097231864929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097231864929199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.011246919631958

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097231864929199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.011246919631958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069491863250732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097231864929199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.011246919631958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069491863250732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.01356315612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097231864929199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.011246919631958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069491863250732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.01356315612793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012401103973389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097231864929199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.011246919631958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069491863250732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.01356315612793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012401103973389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097231864929199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.011246919631958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069491863250732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.01356315612793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012401103973389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036871433258057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097231864929199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.011246919631958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069491863250732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.01356315612793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012401103973389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036871433258057

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0097231864929199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.011246919631958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069491863250732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.01356315612793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.012401103973389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036871433258057

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030190944671631

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00049901008605957

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00041985511779785

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00041985511779785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00036501884460449

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007328987121582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007328987121582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0044550895690918

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00039100646972656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00093913078308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024797916412354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024797916412354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024797916412354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024797916412354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024797916412354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024797916412354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002061128616333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024797916412354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002061128616333

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003615140914917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024797916412354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002061128616333

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003615140914917

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016679763793945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024797916412354

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002061128616333

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003615140914917

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016679763793945

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011162996292114

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0012180805206299

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0012180805206299

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0023930072784424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00078606605529785

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00078606605529785

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0007789134979248

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0007789134979248

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0015079975128174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003741979598999

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003741979598999

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001115083694458

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003741979598999

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001115083694458

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032088756561279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076758861541748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054500102996826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076758861541748

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.012099027633667

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0013730525970459

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0013730525970459

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0025961399078369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017111301422119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017111301422119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034987926483154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017111301422119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034987926483154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002918004989624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017111301422119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034987926483154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002918004989624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017111301422119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034987926483154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002918004989624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017111301422119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034987926483154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002918004989624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037040710449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017111301422119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034987926483154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002918004989624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037040710449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026230812072754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017111301422119

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034987926483154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002918004989624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037040710449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026230812072754

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004939079284668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.00086212158203125

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.00086212158203125

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0015830993652344

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select count(*) as cnt from patient_registration where  patient_registration_id= '197' and  office_id= '1' 
 Execution Time:0.00058102607727051

select count(*) as cnt from patient_registration where  patient_registration_id= '197' and  office_id= '1' 
 Execution Time:0.00058102607727051

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=197  
 Execution Time:0.0016298294067383

select count(*) as cnt from patient_registration where  patient_registration_id= '197' and  office_id= '1' 
 Execution Time:0.00058102607727051

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=197  
 Execution Time:0.0016298294067383

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=197  
 Execution Time:0.00054311752319336

select count(*) as cnt from patient_registration where  patient_registration_id= '196' and  office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_registration where  patient_registration_id= '196' and  office_id= '1' 
 Execution Time:0.00046300888061523

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=196  
 Execution Time:0.0017318725585938

select count(*) as cnt from patient_registration where  patient_registration_id= '196' and  office_id= '1' 
 Execution Time:0.00046300888061523

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=196  
 Execution Time:0.0017318725585938

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=196  
 Execution Time:0.00078392028808594

select count(*) as cnt from patient_registration where  patient_registration_id= '196' and  office_id= '1' 
 Execution Time:0.00046300888061523

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=196  
 Execution Time:0.0017318725585938

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=196  
 Execution Time:0.00078392028808594

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='196' and  office_id= '1' 
 Execution Time:0.000244140625

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031249523162842

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031249523162842

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0007328987121582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015847682952881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015847682952881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.001270055770874

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051469802856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051469802856445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035800933837891

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051469802856445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035800933837891

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0047941207885742

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.00077199935913086

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.00077199935913086

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0016911029815674

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select count(*) as cnt from patient_registration where  patient_registration_id= '519' and  office_id= '1' 
 Execution Time:0.0007331371307373

select count(*) as cnt from patient_registration where  patient_registration_id= '519' and  office_id= '1' 
 Execution Time:0.0007331371307373

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=519  
 Execution Time:0.0036599636077881

select count(*) as cnt from patient_registration where  patient_registration_id= '519' and  office_id= '1' 
 Execution Time:0.0007331371307373

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=519  
 Execution Time:0.0036599636077881

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=519  
 Execution Time:0.00061297416687012

select count(*) as cnt from patient_registration where  patient_registration_id= '519' and  office_id= '1' 
 Execution Time:0.0007331371307373

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=519  
 Execution Time:0.0036599636077881

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=519  
 Execution Time:0.00061297416687012

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='519' and  office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084781646728516

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084781646728516

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045394897460938

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.0023758411407471

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007655143737793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007655143737793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007655143737793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007655143737793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007655143737793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.00089788436889648

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.00089788436889648

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0040369033813477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047080516815186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0036728382110596

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0036728382110596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0036728382110596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0036728382110596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001410961151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001410961151123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 519 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 577 
 Execution Time:0.00018310546875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 577  and `patient_registration_id` = 519 
 Execution Time:0.0012729167938232

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 519 
 Execution Time:0.00091791152954102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008091926574707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008091926574707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082707405090332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082707405090332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from examination where examination_id= '502' and   office_id= '1' 
 Execution Time:0.0008540153503418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 502 
 Execution Time:0.00062799453735352

select * from examination_chargesdetails where  examination_id= '502' 
 Execution Time:0.00056195259094238

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00080490112304688

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012261867523193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012261867523193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012261867523193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012261867523193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010390281677246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012261867523193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010390281677246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012261867523193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010390281677246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012261867523193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010390281677246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012588500976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012261867523193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010390281677246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012588500976562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011398792266846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012261867523193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010390281677246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012588500976562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011398792266846

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015637874603271

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015637874603271

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015637874603271

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015637874603271

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 521 
 Execution Time:0.0005650520324707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 579 
 Execution Time:0.00031685829162598

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 579  and `patient_registration_id` = 521 
 Execution Time:0.0010819435119629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014040470123291

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014040470123291

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027918815612793

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0016989707946777

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0016989707946777

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055694580078125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 522 
 Execution Time:0.00034379959106445

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 580 
 Execution Time:0.00026988983154297

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 580  and `patient_registration_id` = 522 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 522 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 580 
 Execution Time:0.00017309188842773

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 580  and `patient_registration_id` = 522 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053596496582031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 522 
 Execution Time:0.00067305564880371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 580 
 Execution Time:0.00033903121948242

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 580  and `patient_registration_id` = 522 
 Execution Time:0.00062894821166992

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 522 
 Execution Time:0.0013060569763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077009201049805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077009201049805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select * from examination where examination_id= '506' and   office_id= '1' 
 Execution Time:0.00096297264099121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 506 
 Execution Time:0.0018389225006104

select * from examination_chargesdetails where  examination_id= '506' 
 Execution Time:0.0047440528869629

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016908645629883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016908645629883

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043511390686035

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='53' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0033028125762939

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.003262996673584

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select count(*) as cnt from medicine where  name = 'junior lansol' and office_id= '1' 
 Execution Time:0.0015959739685059

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016129016876221

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016129016876221

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016129016876221

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 522 
 Execution Time:0.00060892105102539

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 580 
 Execution Time:0.00050687789916992

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 580  and `patient_registration_id` = 522 
 Execution Time:0.00026988983154297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 522 
 Execution Time:0.0015830993652344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015089511871338

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015089511871338

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039639472961426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069904327392578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069904327392578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032615661621094

select * from examination where examination_id= '506' and   office_id= '1' 
 Execution Time:0.00078511238098145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 506 
 Execution Time:0.00050616264343262

select * from examination_chargesdetails where  examination_id= '506' 
 Execution Time:0.0012431144714355

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='53' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010449886322021

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='106' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056910514831543

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00058388710021973

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='43' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073719024658203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select count(*) as cnt from medicine where  name = 'junior lanzol' and office_id= '1' 
 Execution Time:0.00059795379638672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001788854598999

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001788854598999

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032401084899902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025601387023926

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001788854598999

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032401084899902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 522 
 Execution Time:0.0016679763793945

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 580 
 Execution Time:0.0028989315032959

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 580  and `patient_registration_id` = 522 
 Execution Time:0.0059850215911865

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 522 
 Execution Time:0.0029220581054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004633903503418

select * from examination where examination_id= '506' and   office_id= '1' 
 Execution Time:0.00088095664978027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 506 
 Execution Time:0.00046086311340332

select * from examination_chargesdetails where  examination_id= '506' 
 Execution Time:0.00031089782714844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019919872283936

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019919872283936

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038220882415771

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022060871124268

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022060871124268

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031981468200684

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='107' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0018999576568604

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 521 
 Execution Time:0.00050210952758789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 579 
 Execution Time:0.00033307075500488

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 579  and `patient_registration_id` = 521 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078916549682617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078916549682617

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009758472442627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009758472442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009758472442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009758472442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009758472442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009758472442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018081665039062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009758472442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018081665039062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014362335205078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009758472442627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018081665039062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014362335205078

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025479793548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025479793548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025479793548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025479793548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011351108551025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025479793548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011351108551025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025479793548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001270055770874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011351108551025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select count(*) as cnt from patient_registration where  patient_registration_id= '259' and  office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '259' and  office_id= '1' 
 Execution Time:0.00037503242492676

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=259  
 Execution Time:0.0023350715637207

select count(*) as cnt from patient_registration where  patient_registration_id= '259' and  office_id= '1' 
 Execution Time:0.00037503242492676

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=259  
 Execution Time:0.0023350715637207

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=259  
 Execution Time:0.0018229484558105

select count(*) as cnt from patient_registration where  patient_registration_id= '259' and  office_id= '1' 
 Execution Time:0.00037503242492676

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=259  
 Execution Time:0.0023350715637207

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=259  
 Execution Time:0.0018229484558105

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='259' and  office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.000579833984375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.000579833984375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054502487182617

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016469955444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016469955444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002000093460083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016469955444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002000093460083

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016469955444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002000093460083

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011360645294189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016469955444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002000093460083

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011360645294189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011842250823975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016469955444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002000093460083

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011360645294189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011842250823975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016469955444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002000093460083

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011360645294189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011842250823975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013260841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016469955444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002000093460083

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011360645294189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011842250823975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013260841369629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016469955444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002000093460083

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011360645294189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011842250823975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013260841369629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00057816505432129

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00057816505432129

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00020217895507812

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00064897537231445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070786476135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070786476135254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070786476135254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0071511268615723

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0071511268615723

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027401447296143

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.02255392074585

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0071511268615723

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027401447296143

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.02255392074585

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0033020973205566

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0071511268615723

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027401447296143

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.02255392074585

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0033020973205566

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 198 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00051593780517578

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 259  and `patient_registration_id` = 198 
 Execution Time:0.0033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0061991214752197

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0061991214752197

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011868476867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011868476867676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011868476867676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011868476867676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011868476867676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013397932052612

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011868476867676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013397932052612

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011868476867676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013397932052612

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0052759647369385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011868476867676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013397932052612

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0052759647369385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045289993286133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011868476867676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012519359588623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013397932052612

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0052759647369385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045289993286133

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018949508666992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 198 
 Execution Time:0.00028300285339355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00018906593322754

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 259  and `patient_registration_id` = 198 
 Execution Time:0.00031495094299316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 198 
 Execution Time:0.00050020217895508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select * from examination where examination_id= '96' and   office_id= '1' 
 Execution Time:0.00097298622131348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 96 
 Execution Time:0.0025169849395752

select * from examination_chargesdetails where  examination_id= '96' 
 Execution Time:0.0021638870239258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016050338745117

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016050338745117

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032210350036621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034713745117188

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 198 
 Execution Time:0.0003199577331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00028204917907715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 259  and `patient_registration_id` = 198 
 Execution Time:0.00059103965759277

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 198 
 Execution Time:0.00092196464538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select * from examination where examination_id= '96' and   office_id= '1' 
 Execution Time:0.00089406967163086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 96 
 Execution Time:0.00044584274291992

select * from examination_chargesdetails where  examination_id= '96' 
 Execution Time:0.00028705596923828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040721893310547

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040721893310547

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 198 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.0002739429473877

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 259  and `patient_registration_id` = 198 
 Execution Time:0.00063395500183105

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 198 
 Execution Time:0.00054717063903809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058484077453613

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058484077453613

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041890144348145

select * from examination where examination_id= '96' and   office_id= '1' 
 Execution Time:0.00084495544433594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 96 
 Execution Time:0.00043511390686035

select * from examination_chargesdetails where  examination_id= '96' 
 Execution Time:0.0002899169921875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001450777053833

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001450777053833

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017251968383789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012540817260742

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001450777053833

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017251968383789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012540817260742

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001450777053833

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017251968383789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012540817260742

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 259 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 581 
 Execution Time:0.00055980682373047

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 581  and `patient_registration_id` = 259 
 Execution Time:0.0013267993927002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013251304626465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013251304626465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 523 
 Execution Time:0.00073003768920898

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 582 
 Execution Time:0.00020909309387207

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 582  and `patient_registration_id` = 523 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002659797668457

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002659797668457

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049018859863281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 517 
 Execution Time:0.00046920776367188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 575 
 Execution Time:0.00044107437133789

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 575  and `patient_registration_id` = 517 
 Execution Time:0.00043892860412598

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 517 
 Execution Time:0.0017471313476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select * from examination where examination_id= '503' and   office_id= '1' 
 Execution Time:0.0010349750518799

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 503 
 Execution Time:0.0014450550079346

select * from examination_chargesdetails where  examination_id= '503' 
 Execution Time:0.0012378692626953

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0056359767913818

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0056359767913818

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071382522583008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0014281272888184

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0014281272888184

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0033478736877441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.00083184242248535

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.00083184242248535

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0029458999633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055789947509766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055789947509766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055789947509766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055789947509766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011987686157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055789947509766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011987686157227

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068116188049316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068116188049316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015621185302734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015621185302734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019001960754395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049710273742676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 524 
 Execution Time:0.00032711029052734

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 583 
 Execution Time:0.00026321411132812

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 583  and `patient_registration_id` = 524 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 524 
 Execution Time:0.00062417984008789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 583 
 Execution Time:0.00044393539428711

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 583  and `patient_registration_id` = 524 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 524 
 Execution Time:0.00034093856811523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 583 
 Execution Time:0.0012199878692627

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 583  and `patient_registration_id` = 524 
 Execution Time:0.0014748573303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035932064056396

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078797340393066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078797340393066

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013329982757568

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094795227050781

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094795227050781

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022721290588379

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062894821166992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014238357543945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014238357543945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014238357543945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001129150390625

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001129150390625

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001129150390625

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001129150390625

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 523 
 Execution Time:0.00058603286743164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 582 
 Execution Time:0.00027894973754883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 582  and `patient_registration_id` = 523 
 Execution Time:0.00054001808166504

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 523 
 Execution Time:0.001384973526001

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select * from examination where examination_id= '509' and   office_id= '1' 
 Execution Time:0.001147985458374

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 509 
 Execution Time:0.0013778209686279

select * from examination_chargesdetails where  examination_id= '509' 
 Execution Time:0.00098896026611328

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015950202941895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015950202941895

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015850067138672

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='26' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00081801414489746

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='32' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00038313865661621

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00083518028259277

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='94' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0034880638122559

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00083708763122559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 259 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 581 
 Execution Time:0.00022006034851074

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 581  and `patient_registration_id` = 259 
 Execution Time:0.00033998489379883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 259 
 Execution Time:0.00095605850219727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087809562683105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087809562683105

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053906440734863

select * from examination where examination_id= '508' and   office_id= '1' 
 Execution Time:0.0010440349578857

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 508 
 Execution Time:0.00034308433532715

select * from examination_chargesdetails where  examination_id= '508' 
 Execution Time:0.00031399726867676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046992301940918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046992301940918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00019192695617676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 523 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 582 
 Execution Time:0.00049495697021484

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 582  and `patient_registration_id` = 523 
 Execution Time:0.00023984909057617

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 523 
 Execution Time:0.0012600421905518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022411346435547

select * from examination where examination_id= '509' and   office_id= '1' 
 Execution Time:0.00065493583679199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 509 
 Execution Time:0.00014305114746094

select * from examination_chargesdetails where  examination_id= '509' 
 Execution Time:0.00017189979553223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050115585327148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050115585327148

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 525 
 Execution Time:0.00034093856811523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 584 
 Execution Time:0.00030112266540527

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 584  and `patient_registration_id` = 525 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005490779876709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005490779876709

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027704238891602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 525 
 Execution Time:0.00034189224243164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 584 
 Execution Time:0.00027298927307129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 584  and `patient_registration_id` = 525 
 Execution Time:0.00040197372436523

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 525 
 Execution Time:0.00097799301147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034213066101074

select * from examination where examination_id= '511' and   office_id= '1' 
 Execution Time:0.00079584121704102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 511 
 Execution Time:0.00036096572875977

select * from examination_chargesdetails where  examination_id= '511' 
 Execution Time:0.00040888786315918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041985511779785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041985511779785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='72' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00048995018005371

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00087189674377441

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 521 
 Execution Time:0.00031614303588867

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 579 
 Execution Time:0.00023794174194336

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 579  and `patient_registration_id` = 521 
 Execution Time:0.0002739429473877

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 521 
 Execution Time:0.0013110637664795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053191184997559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053191184997559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select * from examination where examination_id= '507' and   office_id= '1' 
 Execution Time:0.0012037754058838

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 507 
 Execution Time:0.00029420852661133

select * from examination_chargesdetails where  examination_id= '507' 
 Execution Time:0.00026702880859375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 524 
 Execution Time:0.00030088424682617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 583 
 Execution Time:0.00022196769714355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 583  and `patient_registration_id` = 524 
 Execution Time:0.00033903121948242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 524 
 Execution Time:0.0010230541229248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select * from examination where examination_id= '510' and   office_id= '1' 
 Execution Time:0.00088119506835938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 510 
 Execution Time:0.00023388862609863

select * from examination_chargesdetails where  examination_id= '510' 
 Execution Time:0.00019693374633789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007469654083252

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007469654083252

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098586082458496

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098586082458496

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073909759521484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073909759521484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021731853485107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021731853485107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021731853485107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021731853485107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021731853485107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021731853485107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021731853485107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021731853485107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021731853485107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021731853485107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049090385437012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049929618835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049929618835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049929618835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049929618835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0011780261993408

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0011780261993408

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0026750564575195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092291831970215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092291831970215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092291831970215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078678131103516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078678131103516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078678131103516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 526 
 Execution Time:0.00039815902709961

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 585 
 Execution Time:0.00029921531677246

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 585  and `patient_registration_id` = 526 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057005882263184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057005882263184

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028204917907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_registration where  patient_registration_id= '526' and  office_id= '1' 
 Execution Time:0.00053215026855469

select count(*) as cnt from patient_registration where  patient_registration_id= '526' and  office_id= '1' 
 Execution Time:0.00053215026855469

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=526  
 Execution Time:0.0023071765899658

select count(*) as cnt from patient_registration where  patient_registration_id= '526' and  office_id= '1' 
 Execution Time:0.00053215026855469

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=526  
 Execution Time:0.0023071765899658

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=526  
 Execution Time:0.00057506561279297

select count(*) as cnt from patient_registration where  patient_registration_id= '526' and  office_id= '1' 
 Execution Time:0.00053215026855469

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=526  
 Execution Time:0.0023071765899658

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=526  
 Execution Time:0.00057506561279297

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='526' and  office_id= '1' 
 Execution Time:0.00017690658569336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062394142150879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062394142150879

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010378360748291

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 526 
 Execution Time:0.00074887275695801

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 585 
 Execution Time:0.00054121017456055

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 585  and `patient_registration_id` = 526 
 Execution Time:0.0014958381652832

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 526 
 Execution Time:0.001413106918335

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select * from examination where examination_id= '512' and   office_id= '1' 
 Execution Time:0.0015580654144287

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 512 
 Execution Time:0.0009608268737793

select * from examination_chargesdetails where  examination_id= '512' 
 Execution Time:0.0005190372467041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079584121704102

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079584121704102

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032687187194824

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011510848999023

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072598457336426

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.004345178604126

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066995620727539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066995620727539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017869472503662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017869472503662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017869472503662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049018859863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011589527130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095510482788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095510482788086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095510482788086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0006561279296875

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-17' and  '2022-03-17' and  billing_master.office_id= 1        
 Execution Time:0.0006561279296875

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
		where billing=0 and appointment_date between  '2022-03-17' and '2022-03-17' and  patient_registration.office_id= 1      
 Execution Time:0.0018839836120605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010240077972412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010240077972412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010240077972412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082302093505859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082302093505859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011129379272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011129379272461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011129379272461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024223327636719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024223327636719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063514709472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024223327636719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063514709472656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024223327636719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063514709472656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select count(*) as cnt from patient_registration where  patient_registration_id= '196' and  office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from patient_registration where  patient_registration_id= '196' and  office_id= '1' 
 Execution Time:0.00051403045654297

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=196  
 Execution Time:0.0016880035400391

select count(*) as cnt from patient_registration where  patient_registration_id= '196' and  office_id= '1' 
 Execution Time:0.00051403045654297

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=196  
 Execution Time:0.0016880035400391

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=196  
 Execution Time:0.00076603889465332

select count(*) as cnt from patient_registration where  patient_registration_id= '196' and  office_id= '1' 
 Execution Time:0.00051403045654297

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=196  
 Execution Time:0.0016880035400391

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=196  
 Execution Time:0.00076603889465332

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='196' and  office_id= '1' 
 Execution Time:0.00060415267944336

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00066208839416504

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00066208839416504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_appointment where  patient_registration_id = 196 and appointment_date= '2022-03-17' 
 Execution Time:0.0097031593322754

select count(*) as cnt from patient_appointment where  patient_registration_id = 196 and appointment_date= '2022-03-17' 
 Execution Time:0.00062894821166992

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00084400177001953

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00084400177001953

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00085878372192383

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00059604644775391

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0021162033081055

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00059604644775391

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0021162033081055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00059008598327637

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00059604644775391

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0021162033081055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00059008598327637

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00068092346191406

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00068092346191406

select patient_registration_id,address from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00063681602478027

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00063681602478027

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044512748718262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044512748718262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030922889709473

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00043702125549316

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00052285194396973

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0020489692687988

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0020489692687988

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00066804885864258

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0020489692687988

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00066804885864258

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00017189979553223

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00051307678222656

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,address from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00078678131103516

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00057601928710938

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0020661354064941

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00057601928710938

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0020661354064941

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00083208084106445

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00057601928710938

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0020661354064941

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00083208084106445

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00076484680175781

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00076484680175781

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0010769367218018

select count(*) as cnt from patient_registration where  patient_registration_id= '198' and  office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_registration where  patient_registration_id= '198' and  office_id= '1' 
 Execution Time:0.00032901763916016

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=198  
 Execution Time:0.0016350746154785

select count(*) as cnt from patient_registration where  patient_registration_id= '198' and  office_id= '1' 
 Execution Time:0.00032901763916016

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=198  
 Execution Time:0.0016350746154785

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=198  
 Execution Time:0.00058913230895996

select count(*) as cnt from patient_registration where  patient_registration_id= '198' and  office_id= '1' 
 Execution Time:0.00032901763916016

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=198  
 Execution Time:0.0016350746154785

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=198  
 Execution Time:0.00058913230895996

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='198' and  office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00040411949157715

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00040411949157715

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028014183044434

select count(*) as cnt from patient_appointment where  patient_registration_id = 198 and appointment_date= '2022-03-17' 
 Execution Time:0.00067520141601562

select count(*) as cnt from patient_appointment where  patient_registration_id = 198 and appointment_date= '2022-03-17' 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00029802322387695

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00078296661376953

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00078296661376953

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,address from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00087499618530273

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00078010559082031

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00078010559082031

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0013091564178467

select count(*) as cnt from patient_registration where  patient_registration_id= '47' and  office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from patient_registration where  patient_registration_id= '47' and  office_id= '1' 
 Execution Time:0.00038504600524902

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=47  
 Execution Time:0.001255989074707

select count(*) as cnt from patient_registration where  patient_registration_id= '47' and  office_id= '1' 
 Execution Time:0.00038504600524902

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=47  
 Execution Time:0.001255989074707

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=47  
 Execution Time:0.00037884712219238

select count(*) as cnt from patient_registration where  patient_registration_id= '47' and  office_id= '1' 
 Execution Time:0.00038504600524902

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=47  
 Execution Time:0.001255989074707

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=47  
 Execution Time:0.00037884712219238

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='47' and  office_id= '1' 
 Execution Time:0.00018000602722168

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0004420280456543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from patient_appointment where  patient_registration_id = 47 and appointment_date= '2022-03-17' 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00049495697021484

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00056004524230957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023293495178223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016593933105469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023293495178223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00083613395690918

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00083613395690918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=31  
 Execution Time:0.0020110607147217

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00083613395690918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=31  
 Execution Time:0.0020110607147217

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=31  
 Execution Time:0.0005190372467041

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00083613395690918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=31  
 Execution Time:0.0020110607147217

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=31  
 Execution Time:0.0005190372467041

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='31' and  office_id= '1' 
 Execution Time:0.00019097328186035

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00092887878417969

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00092887878417969

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from patient_appointment where  patient_registration_id = 31 and appointment_date= '2022-03-17' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00039505958557129

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00063991546630859

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0032908916473389

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0032908916473389

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036287307739258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036287307739258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00037002563476562

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=31  
 Execution Time:0.0028078556060791

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00037002563476562

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=31  
 Execution Time:0.0028078556060791

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=31  
 Execution Time:0.0008540153503418

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00037002563476562

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=31  
 Execution Time:0.0028078556060791

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=31  
 Execution Time:0.0008540153503418

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='31' and  office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027298927307129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00020194053649902

select count(*) as cnt from patient_appointment where  patient_registration_id = 31 and appointment_date= '2022-03-17' 
 Execution Time:0.00054287910461426

select count(*) as cnt from patient_appointment where  patient_registration_id = 31 and appointment_date= '2022-03-17' 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469


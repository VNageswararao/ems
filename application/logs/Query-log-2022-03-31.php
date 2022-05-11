select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027339458465576

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0029408931732178

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027339458465576

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 545 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 830 
 Execution Time:0.00041007995605469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 830  and `patient_registration_id` = 545 
 Execution Time:0.0023880004882812

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 545 
 Execution Time:0.0010437965393066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031681060791016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031681060791016

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034689903259277

select * from examination where examination_id= '752' and   office_id= '1' 
 Execution Time:0.00082302093505859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 752 
 Execution Time:0.0025990009307861

select * from examination_chargesdetails where  examination_id= '752' 
 Execution Time:0.0028738975524902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035660266876221

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035660266876221

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.019874811172485

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.019874811172485

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.019874811172485

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.019874811172485

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028128623962402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.019874811172485

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028128623962402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033559799194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.019874811172485

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028128623962402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033559799194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029540061950684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.019874811172485

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028128623962402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033559799194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029540061950684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.019874811172485

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028128623962402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033559799194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029540061950684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026259422302246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.019874811172485

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028128623962402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033559799194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029540061950684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026259422302246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019121170043945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.019874811172485

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028128623962402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033559799194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029540061950684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026259422302246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019121170043945

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.020721197128296

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.020721197128296

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0055170059204102

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.020721197128296

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0055170059204102

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=724  
 Execution Time:0.0052502155303955

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.020721197128296

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0055170059204102

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=724  
 Execution Time:0.0052502155303955

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='724' and  office_id= '1' 
 Execution Time:0.00054693222045898

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from patient_appointment where  patient_registration_id = 724 and appointment_date= '2022-03-31' 
 Execution Time:0.00063800811767578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00086402893066406

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00086402893066406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00074982643127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048422813415527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048422813415527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001633882522583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048422813415527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001633882522583

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00097084045410156

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00097084045410156

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0043091773986816

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00097084045410156

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0043091773986816

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=724  
 Execution Time:0.0071299076080322

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00097084045410156

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0043091773986816

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=724  
 Execution Time:0.0071299076080322

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='724' and  office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00079488754272461

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00079488754272461

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from patient_appointment where  patient_registration_id = 724 and appointment_date= '2022-03-31' 
 Execution Time:0.00088405609130859

select count(*) as cnt from patient_appointment where  patient_registration_id = 724 and appointment_date= '2022-03-31' 
 Execution Time:0.0011579990386963

select count(*) as cnt from patient_registration where  patient_registration_id= '111' and  office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from patient_registration where  patient_registration_id= '111' and  office_id= '1' 
 Execution Time:0.00046992301940918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=111  
 Execution Time:0.0045700073242188

select count(*) as cnt from patient_registration where  patient_registration_id= '111' and  office_id= '1' 
 Execution Time:0.00046992301940918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=111  
 Execution Time:0.0045700073242188

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=111  
 Execution Time:0.001317024230957

select count(*) as cnt from patient_registration where  patient_registration_id= '111' and  office_id= '1' 
 Execution Time:0.00046992301940918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=111  
 Execution Time:0.0045700073242188

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=111  
 Execution Time:0.001317024230957

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='111' and  office_id= '1' 
 Execution Time:0.00086283683776855

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0035579204559326

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0035579204559326

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069403648376465

select count(*) as cnt from patient_appointment where  patient_registration_id = 111 and appointment_date= '2022-03-31' 
 Execution Time:0.0014581680297852

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00030899047851562

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0024011135101318

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00030899047851562

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0024011135101318

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=545  
 Execution Time:0.00052618980407715

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00030899047851562

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0024011135101318

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=545  
 Execution Time:0.00052618980407715

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='545' and  office_id= '1' 
 Execution Time:0.00023317337036133

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006251335144043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006251335144043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017001628875732

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053286552429199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053191184997559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040698051452637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025310516357422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025310516357422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025310516357422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011370182037354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025310516357422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011370182037354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092005729675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025310516357422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011370182037354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020489692687988

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00077199935913086

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00077199935913086

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0047261714935303

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00077199935913086

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0047261714935303

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=545  
 Execution Time:0.0011148452758789

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00077199935913086

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0047261714935303

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=545  
 Execution Time:0.0011148452758789

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='545' and  office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042510032653809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from patient_appointment where  patient_registration_id = 545 and appointment_date= '2022-03-31' 
 Execution Time:0.0010139942169189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013418197631836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013418197631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013418197631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013418197631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013418197631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013418197631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013418197631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013418197631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097012519836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013418197631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097012519836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026619434356689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013418197631836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097012519836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026619434356689

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004279613494873

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019361972808838

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076508522033691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019469261169434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076508522033691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019469261169434

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.032082080841064

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.032082080841064

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0077660083770752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.032082080841064

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0077660083770752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013480186462402

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.032082080841064

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0077660083770752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013480186462402

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 832 
 Execution Time:0.00046682357788086

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 832  and `patient_registration_id` = 724 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.00096416473388672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 832 
 Execution Time:0.00041389465332031

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 832  and `patient_registration_id` = 724 
 Execution Time:0.00072312355041504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098776817321777

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098776817321777

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004310131072998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004310131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004310131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098919868469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004310131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098919868469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004310131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098919868469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010828971862793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004310131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098919868469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010828971862793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020010471343994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004310131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072288513183594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098919868469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010828971862793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020010471343994

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0054199695587158

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0054199695587158

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0047681331634521

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095701217651367

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095701217651367

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017421245574951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017421245574951

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017421245574951

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017421245574951

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017061233520508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017421245574951

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017061233520508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0066490173339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026860237121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017421245574951

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017061233520508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037431716918945

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037431716918945

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027041435241699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063920021057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063920021057129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012500286102295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029420852661133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063920021057129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012500286102295

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077915191650391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077915191650391

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029878616333008

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042538642883301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042538642883301

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028250217437744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077986717224121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032410621643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032410621643066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038900375366211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032410621643066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038900375366211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.046831846237183

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032410621643066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038900375366211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.046831846237183

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.050416946411133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032410621643066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038900375366211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.046831846237183

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.050416946411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.069342136383057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032410621643066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038900375366211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.046831846237183

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.050416946411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.069342136383057

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021321773529053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032410621643066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038900375366211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.046831846237183

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.050416946411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.069342136383057

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021321773529053

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.03594708442688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032410621643066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038900375366211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.046831846237183

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.050416946411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.069342136383057

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021321773529053

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.03594708442688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032410621643066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038900375366211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.046831846237183

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.050416946411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.069342136383057

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021321773529053

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.03594708442688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00071811676025391

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00071811676025391

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00026082992553711

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0003969669342041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020771026611328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020771026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020771026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020771026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037381649017334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020771026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037381649017334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020771026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037381649017334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017290115356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020771026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037381649017334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017290115356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020771026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037381649017334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017290115356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034849643707275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020771026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037381649017334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017290115356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034849643707275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040009021759033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020771026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037381649017334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037190914154053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017290115356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034849643707275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040009021759033

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.026770830154419

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.026770830154419

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.042111158370972

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.004500150680542

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.026770830154419

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.042111158370972

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.004500150680542

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.026770830154419

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.042111158370972

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.004500150680542

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 203 
 Execution Time:0.0037670135498047

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 273 
 Execution Time:0.0038800239562988

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 273  and `patient_registration_id` = 203 
 Execution Time:0.062041997909546

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.017185211181641

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.017185211181641

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0330810546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015771389007568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015771389007568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015771389007568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015771389007568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021350383758545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015771389007568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021350383758545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013861656188965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015771389007568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021350383758545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013861656188965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015771389007568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021350383758545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013861656188965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015771389007568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021350383758545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013861656188965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038690567016602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015771389007568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021350383758545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013861656188965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038690567016602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053238868713379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015771389007568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021350383758545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013861656188965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038690567016602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053238868713379

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026321411132812

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0081210136413574

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0081210136413574

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0036859512329102

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072908401489258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072908401489258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032699108123779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032699108123779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014200210571289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032699108123779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014200210571289

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032699108123779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014200210571289

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032699108123779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014200210571289

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018410682678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032699108123779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014200210571289

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018410682678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022180080413818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032699108123779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014200210571289

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018410682678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022180080413818

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029680728912354

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 111 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 833 
 Execution Time:0.001288890838623

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 833  and `patient_registration_id` = 111 
 Execution Time:0.0006861686706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003032922744751

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003032922744751

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003140926361084

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 545 
 Execution Time:0.00038909912109375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 834 
 Execution Time:0.00027203559875488

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 834  and `patient_registration_id` = 545 
 Execution Time:0.00019311904907227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018990039825439

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018990039825439

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019919872283936

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 545 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 834 
 Execution Time:0.0002591609954834

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 834  and `patient_registration_id` = 545 
 Execution Time:0.00048089027404785

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 545 
 Execution Time:0.001492977142334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select * from examination where examination_id= '756' and   office_id= '1' 
 Execution Time:0.00068998336791992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 756 
 Execution Time:0.0011780261993408

select * from examination_chargesdetails where  examination_id= '756' 
 Execution Time:0.0012409687042236

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088000297546387

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088000297546387

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034594535827637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.024473190307617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.024473190307617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075006484985352

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0035989284515381

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0019910335540771

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 726 
 Execution Time:0.00066590309143066

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 836 
 Execution Time:0.00050806999206543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 836  and `patient_registration_id` = 726 
 Execution Time:0.00047683715820312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010261535644531

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010261535644531

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003199577331543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0056469440460205

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0056469440460205

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0056469440460205

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00091791152954102

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 726 
 Execution Time:0.00067996978759766

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 836 
 Execution Time:0.0004119873046875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 836  and `patient_registration_id` = 726 
 Execution Time:0.0005800724029541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00347900390625

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00347900390625

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 726 
 Execution Time:0.00071001052856445

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 836 
 Execution Time:0.00047206878662109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 836  and `patient_registration_id` = 726 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098013877868652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098013877868652

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034308433532715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 727 
 Execution Time:0.00050115585327148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 837 
 Execution Time:0.00040102005004883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 837  and `patient_registration_id` = 727 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020360946655273

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020360946655273

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057196617126465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 728 
 Execution Time:0.00051999092102051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 838 
 Execution Time:0.00049185752868652

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 838  and `patient_registration_id` = 728 
 Execution Time:0.00059413909912109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074315071105957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074315071105957

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 725 
 Execution Time:0.00056099891662598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 835 
 Execution Time:0.00053691864013672

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 835  and `patient_registration_id` = 725 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 725 
 Execution Time:0.00034284591674805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 835 
 Execution Time:0.00022792816162109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 835  and `patient_registration_id` = 725 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008389949798584

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008389949798584

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062894821166992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 727 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 837 
 Execution Time:0.00018692016601562

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 837  and `patient_registration_id` = 727 
 Execution Time:0.00041007995605469

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 727 
 Execution Time:0.0016279220581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select * from examination where examination_id= '758' and   office_id= '1' 
 Execution Time:0.0012919902801514

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 758 
 Execution Time:0.00071597099304199

select * from examination_chargesdetails where  examination_id= '758' 
 Execution Time:0.00071501731872559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095605850219727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095605850219727

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062012672424316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062012672424316

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039887428283691

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001054048538208

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005340576171875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.00050806999206543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 832 
 Execution Time:0.00030803680419922

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 832  and `patient_registration_id` = 724 
 Execution Time:0.00020599365234375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 724 
 Execution Time:0.0016100406646729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015859603881836

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075197219848633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075197219848633

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0082368850708008

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014479160308838

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014479160308838

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select * from examination where examination_id= '754' and   office_id= '1' 
 Execution Time:0.00094199180603027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 754 
 Execution Time:0.00051999092102051

select * from examination_chargesdetails where  examination_id= '754' 
 Execution Time:0.00037503242492676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.00045418739318848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 832 
 Execution Time:0.00096607208251953

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 832  and `patient_registration_id` = 724 
 Execution Time:0.00044107437133789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 724 
 Execution Time:0.0022289752960205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select * from examination where examination_id= '754' and   office_id= '1' 
 Execution Time:0.001957893371582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 754 
 Execution Time:0.0019948482513428

select * from examination_chargesdetails where  examination_id= '754' 
 Execution Time:0.0025219917297363

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091385841369629

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091385841369629

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059008598327637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063085556030273

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063085556030273

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.032315969467163

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.032315969467163

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.032315969467163

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018841981887817

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.032315969467163

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018841981887817

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010729074478149

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.032315969467163

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018841981887817

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010729074478149

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.03288197517395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.032315969467163

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018841981887817

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010729074478149

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.03288197517395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.032315969467163

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018841981887817

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010729074478149

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.03288197517395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.015192985534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.032315969467163

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018841981887817

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010729074478149

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.03288197517395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.015192985534668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057089328765869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.032315969467163

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018841981887817

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010729074478149

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.03288197517395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.015192985534668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057089328765869

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.019567012786865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019998550415039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019998550415039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019998550415039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 725 
 Execution Time:0.00055909156799316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 835 
 Execution Time:0.00098991394042969

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 835  and `patient_registration_id` = 725 
 Execution Time:0.00087404251098633

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 725 
 Execution Time:0.0016391277313232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098705291748047

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098705291748047

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054812431335449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001129150390625

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001129150390625

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select * from examination where examination_id= '760' and   office_id= '1' 
 Execution Time:0.0010819435119629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 760 
 Execution Time:0.00064301490783691

select * from examination_chargesdetails where  examination_id= '760' 
 Execution Time:0.00064706802368164

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011091232299805

select count(*) as cnt from patient_registration where  patient_registration_id= '643' and  office_id= '1' 
 Execution Time:0.0015299320220947

select count(*) as cnt from patient_registration where  patient_registration_id= '643' and  office_id= '1' 
 Execution Time:0.0015299320220947

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=643  
 Execution Time:0.0076010227203369

select count(*) as cnt from patient_registration where  patient_registration_id= '643' and  office_id= '1' 
 Execution Time:0.0015299320220947

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=643  
 Execution Time:0.0076010227203369

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=643  
 Execution Time:0.00099611282348633

select count(*) as cnt from patient_registration where  patient_registration_id= '643' and  office_id= '1' 
 Execution Time:0.0015299320220947

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=643  
 Execution Time:0.0076010227203369

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=643  
 Execution Time:0.00099611282348633

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='643' and  office_id= '1' 
 Execution Time:0.0007319450378418

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013649463653564

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013649463653564

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00079512596130371

select count(*) as cnt from patient_appointment where  patient_registration_id = 643 and appointment_date= '2022-03-31' 
 Execution Time:0.00077104568481445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 726 
 Execution Time:0.00024580955505371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 836 
 Execution Time:0.00018000602722168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 836  and `patient_registration_id` = 726 
 Execution Time:0.00053715705871582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 726 
 Execution Time:0.0011250972747803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select * from examination where examination_id= '757' and   office_id= '1' 
 Execution Time:0.0008399486541748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 757 
 Execution Time:0.00030684471130371

select * from examination_chargesdetails where  examination_id= '757' 
 Execution Time:0.00054717063903809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090909004211426

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090909004211426

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077486038208008

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077486038208008

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067305564880371

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059604644775391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 728 
 Execution Time:0.00030779838562012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 838 
 Execution Time:0.00025296211242676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 838  and `patient_registration_id` = 728 
 Execution Time:0.00042819976806641

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 728 
 Execution Time:0.0011770725250244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066304206848145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066304206848145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077700614929199

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077700614929199

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

select * from examination where examination_id= '759' and   office_id= '1' 
 Execution Time:0.0044498443603516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 759 
 Execution Time:0.00040912628173828

select * from examination_chargesdetails where  examination_id= '759' 
 Execution Time:0.00037908554077148

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010349750518799

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011820793151855

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00058197975158691

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011579990386963

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 643 
 Execution Time:0.00032210350036621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 839 
 Execution Time:0.00029492378234863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 839  and `patient_registration_id` = 643 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028641223907471

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018727779388428

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018727779388428

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018727779388428

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 111 
 Execution Time:0.00047898292541504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 833 
 Execution Time:0.00078105926513672

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 833  and `patient_registration_id` = 111 
 Execution Time:0.00063991546630859

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 111 
 Execution Time:0.0018019676208496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select * from examination where examination_id= '755' and   office_id= '1' 
 Execution Time:0.00094509124755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010292053222656

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 755 
 Execution Time:0.00095701217651367

select * from examination_chargesdetails where  examination_id= '755' 
 Execution Time:0.00047206878662109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088214874267578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088214874267578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063085556030273

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042891502380371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 643 
 Execution Time:0.00029611587524414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 839 
 Execution Time:0.00021004676818848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 839  and `patient_registration_id` = 643 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089693069458008

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089693069458008

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0043289661407471

SELECT *
FROM `examination`
WHERE `examination_id` = 654 
 Execution Time:0.0019688606262207

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0065839290618896

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.008465051651001

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 643 
 Execution Time:0.015130043029785

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.0050158500671387

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=654 
 Execution Time:0.011772871017456

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=654 
 Execution Time:0.002079963684082

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=654 
 Execution Time:0.0029618740081787

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=654 
 Execution Time:0.0048589706420898

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='654' and office_id='1' 
 Execution Time:0.0041220188140869

select * from examination_chargesdetails where  examination_id= '654' 
 Execution Time:0.00097203254699707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021340847015381

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021340847015381

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.013945817947388

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021340847015381

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.013945817947388

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.044356107711792

select * from office where  office_id= '1' 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='97' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.005897045135498

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079989433288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004371166229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017741918563843

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017741918563843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001629114151001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017741918563843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001629114151001

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017741918563843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001629114151001

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012178897857666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017741918563843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001629114151001

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012178897857666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017741918563843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001629114151001

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012178897857666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017741918563843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001629114151001

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012178897857666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017741918563843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001629114151001

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012178897857666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023829936981201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017741918563843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001629114151001

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012178897857666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023829936981201

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012760162353516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017741918563843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001629114151001

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.012178897857666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016648769378662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023829936981201

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012760162353516

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081682205200195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081682205200195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081682205200195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 643 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 839 
 Execution Time:0.00066494941711426

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 839  and `patient_registration_id` = 643 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 643 
 Execution Time:0.00048208236694336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 839 
 Execution Time:0.00035905838012695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 839  and `patient_registration_id` = 643 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085902214050293

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085902214050293

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012600421905518

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012600421905518

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017929077148438

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012600421905518

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017929077148438

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012600421905518

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017929077148438

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 643 
 Execution Time:0.0007319450378418

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 839 
 Execution Time:0.00041007995605469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 839  and `patient_registration_id` = 643 
 Execution Time:0.00033807754516602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 643 
 Execution Time:0.0013549327850342

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select * from examination where examination_id= '761' and   office_id= '1' 
 Execution Time:0.0039260387420654

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032129287719727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 761 
 Execution Time:0.0011241436004639

select * from examination_chargesdetails where  examination_id= '761' 
 Execution Time:0.00051593780517578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013458728790283

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002877950668335

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002877950668335

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066804885864258

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0009760856628418

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0009760856628418

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,address from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0096681118011475

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013251304626465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013251304626465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016381740570068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016381740570068

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085878372192383

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085878372192383

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085878372192383

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085878372192383

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 729 
 Execution Time:0.00055408477783203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 840 
 Execution Time:0.00049114227294922

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 840  and `patient_registration_id` = 729 
 Execution Time:0.00050497055053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 729 
 Execution Time:0.00055098533630371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 840 
 Execution Time:0.00037097930908203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 840  and `patient_registration_id` = 729 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083494186401367

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083494186401367

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034308433532715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 729 
 Execution Time:0.0003969669342041

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 840 
 Execution Time:0.0002899169921875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 840  and `patient_registration_id` = 729 
 Execution Time:0.0005040168762207

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 729 
 Execution Time:0.0021398067474365

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select * from examination where examination_id= '762' and   office_id= '1' 
 Execution Time:0.0035569667816162

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 762 
 Execution Time:0.0011589527130127

select * from examination_chargesdetails where  examination_id= '762' 
 Execution Time:0.00098991394042969

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012459754943848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012459754943848

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011458396911621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023188591003418

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023188591003418

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038208961486816

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0026121139526367

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011320114135742

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00077605247497559

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027141571044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027141571044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027141571044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027141571044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027141571044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014619827270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027141571044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014619827270508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027141571044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014619827270508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027141571044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014619827270508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040359497070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027141571044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014619827270508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040359497070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018799304962158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027141571044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013589859008789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014619827270508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040359497070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018799304962158

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001594066619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087690353393555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087690353393555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087690353393555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016350746154785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016350746154785

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023691654205322

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023691654205322

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026240348815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026240348815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019259452819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026240348815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019259452819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026240348815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019259452819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015168190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026240348815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019259452819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015168190002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026240348815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019259452819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015168190002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020349025726318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026240348815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019259452819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015168190002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020349025726318

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026240348815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019259452819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015168190002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014870166778564

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020349025726318

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0078089237213135

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020241737365723

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020241737365723

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020241737365723

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 730 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 841 
 Execution Time:0.00018405914306641

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 841  and `patient_registration_id` = 730 
 Execution Time:0.0018301010131836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 730 
 Execution Time:0.0030460357666016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 841 
 Execution Time:0.00043702125549316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 841  and `patient_registration_id` = 730 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.004072904586792

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.004072904586792

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013508796691895

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 730 
 Execution Time:0.00051498413085938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 841 
 Execution Time:0.00039410591125488

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 841  and `patient_registration_id` = 730 
 Execution Time:0.00031900405883789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 730 
 Execution Time:0.0022480487823486

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016200542449951

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016200542449951

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069713592529297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069713592529297

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027108192443848

select * from examination where examination_id= '763' and   office_id= '1' 
 Execution Time:0.00077414512634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 763 
 Execution Time:0.001338005065918

select * from examination_chargesdetails where  examination_id= '763' 
 Execution Time:0.0008699893951416

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='115' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0035698413848877

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011279582977295

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066995620727539

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='15' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00049686431884766

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0076189041137695

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='42' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086402893066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086402893066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017690658569336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058889389038086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058889389038086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023229122161865

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0016582012176514

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0016582012176514

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012269020080566

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012269020080566

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083112716674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083112716674805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083112716674805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005950927734375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005950927734375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093293190002441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016489028930664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093293190002441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016489028930664

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059986114501953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059986114501953

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061511993408203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061511993408203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013959407806396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013959407806396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

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
		where billing=0 and appointment_date between  '2022-03-01' and '2022-03-31' and  patient_registration.office_id= 1      
 Execution Time:0.026998996734619

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036039352416992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036039352416992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036039352416992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 731 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 842 
 Execution Time:0.00039505958557129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 842  and `patient_registration_id` = 731 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 731 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 842 
 Execution Time:0.00026822090148926

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 842  and `patient_registration_id` = 731 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001025915145874

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001025915145874

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036978721618652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 731 
 Execution Time:0.00060606002807617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 842 
 Execution Time:0.00045895576477051

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 842  and `patient_registration_id` = 731 
 Execution Time:0.00032901763916016

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 731 
 Execution Time:0.0018160343170166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036509037017822

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036509037017822

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002295970916748

select * from examination where examination_id= '764' and   office_id= '1' 
 Execution Time:0.0013189315795898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022869110107422

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 764 
 Execution Time:0.0035009384155273

select * from examination_chargesdetails where  examination_id= '764' 
 Execution Time:0.00087094306945801

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092911720275879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092911720275879

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006718635559082

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='54' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0019080638885498

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='20' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055098533630371

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072097778320312

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0018439292907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090503692626953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090503692626953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026810169219971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012061595916748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090503692626953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026810169219971

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068116188049316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068116188049316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054693222045898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054693222045898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017910003662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030789375305176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030789375305176

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030789375305176

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030789375305176

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030789375305176

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017011165618896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030789375305176

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017011165618896

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024178028106689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030789375305176

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017011165618896

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024178028106689

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058951377868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058951377868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058951377868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058951377868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058951377868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058951377868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058951377868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058951377868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012710094451904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058951377868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012710094451904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012691020965576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058951377868652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048420429229736

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012710094451904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012691020965576

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00067019462585449

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00067019462585449

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014009475708008

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014009475708008

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023820400238037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023820400238037

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023820400238037

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023820400238037

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023820400238037

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023820400238037

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023820400238037

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010330677032471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023820400238037

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010330677032471

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023820400238037

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010330677032471

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065288543701172

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065288543701172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045099258422852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045099258422852

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045099258422852

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023949146270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045099258422852

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023949146270752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022680759429932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045099258422852

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023949146270752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022680759429932

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040550231933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045099258422852

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023949146270752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022680759429932

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083279609680176

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083279609680176

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083279609680176

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083279609680176

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 732 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 843 
 Execution Time:0.00021505355834961

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 843  and `patient_registration_id` = 732 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 732 
 Execution Time:0.00035977363586426

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 843 
 Execution Time:0.00032591819763184

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 843  and `patient_registration_id` = 732 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017518997192383

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017518997192383

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00323486328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00323486328125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select count(*) as cnt from patient_registration where  patient_registration_id= '731' and  office_id= '1' 
 Execution Time:0.0033109188079834

select count(*) as cnt from patient_registration where  patient_registration_id= '731' and  office_id= '1' 
 Execution Time:0.0033109188079834

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=731  
 Execution Time:0.02196192741394

select count(*) as cnt from patient_registration where  patient_registration_id= '731' and  office_id= '1' 
 Execution Time:0.0033109188079834

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=731  
 Execution Time:0.02196192741394

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=731  
 Execution Time:0.0047659873962402

select count(*) as cnt from patient_registration where  patient_registration_id= '731' and  office_id= '1' 
 Execution Time:0.0033109188079834

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=731  
 Execution Time:0.02196192741394

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=731  
 Execution Time:0.0047659873962402

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='731' and  office_id= '1' 
 Execution Time:0.0024049282073975

select count(*) as cnt from patient_registration where  patient_registration_id= '731' and  office_id= '1' 
 Execution Time:0.0038328170776367

select count(*) as cnt from patient_registration where  patient_registration_id= '731' and  office_id= '1' 
 Execution Time:0.0038328170776367

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=731  
 Execution Time:0.0039999485015869

select count(*) as cnt from patient_registration where  patient_registration_id= '731' and  office_id= '1' 
 Execution Time:0.0038328170776367

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=731  
 Execution Time:0.0039999485015869

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=731  
 Execution Time:0.00086402893066406

select count(*) as cnt from patient_registration where  patient_registration_id= '731' and  office_id= '1' 
 Execution Time:0.0038328170776367

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=731  
 Execution Time:0.0039999485015869

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=731  
 Execution Time:0.00086402893066406

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='731' and  office_id= '1' 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011959075927734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011959075927734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020601749420166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011959075927734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020601749420166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0080440044403076

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0080440044403076

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083518028259277

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00085210800170898

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00085210800170898

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076603889465332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021579265594482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076603889465332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021579265594482

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011780261993408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011780261993408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011780261993408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0021398067474365

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0021398067474365

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006709098815918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040912628173828

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025548934936523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025548934936523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025548934936523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017871856689453

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025548934936523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017871856689453

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 733 
 Execution Time:0.00037288665771484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 844 
 Execution Time:0.00027203559875488

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 844  and `patient_registration_id` = 733 
 Execution Time:0.0011188983917236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081419944763184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 733 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 844 
 Execution Time:0.00031781196594238

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 844  and `patient_registration_id` = 733 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00130295753479

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00130295753479

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 733 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 844 
 Execution Time:0.0022330284118652

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 844  and `patient_registration_id` = 733 
 Execution Time:0.00031805038452148

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 733 
 Execution Time:0.0019161701202393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007178783416748

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007178783416748

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from examination where examination_id= '766' and   office_id= '1' 
 Execution Time:0.0033690929412842

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021898746490479

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 766 
 Execution Time:0.005681037902832

select * from examination_chargesdetails where  examination_id= '766' 
 Execution Time:0.0010879039764404

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018999576568604

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018999576568604

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005800724029541

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='91' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0018749237060547

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00069594383239746

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062894821166992

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064802169799805

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0009620189666748

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068402290344238

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012099742889404

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012099742889404

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020718574523926

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012550354003906

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012550354003906

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078921318054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078921318054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089097023010254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078921318054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051712989807129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051712989807129

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025081634521484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071811676025391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071811676025391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014472007751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014472007751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014472007751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014472007751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014472007751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014472007751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022389888763428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014472007751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022389888763428

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024371147155762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014472007751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022389888763428

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024371147155762

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017509460449219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017509460449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022947788238525

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.017491817474365

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017509460449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022947788238525

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.017491817474365

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017509460449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022947788238525

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.017491817474365

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 734 
 Execution Time:0.0014321804046631

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 845 
 Execution Time:0.0023221969604492

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 845  and `patient_registration_id` = 734 
 Execution Time:0.0040519237518311

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032868385314941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032868385314941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030148029327393

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032868385314941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030148029327393

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032868385314941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030148029327393

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 734 
 Execution Time:0.00060510635375977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 845 
 Execution Time:0.00032496452331543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 845  and `patient_registration_id` = 734 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.022555112838745

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.022555112838745

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022759437561035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select count(*) as cnt from patient_registration where  patient_registration_id= '734' and  office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from patient_registration where  patient_registration_id= '734' and  office_id= '1' 
 Execution Time:0.00043201446533203

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=734  
 Execution Time:0.0037379264831543

select count(*) as cnt from patient_registration where  patient_registration_id= '734' and  office_id= '1' 
 Execution Time:0.00043201446533203

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=734  
 Execution Time:0.0037379264831543

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=734  
 Execution Time:0.00081491470336914

select count(*) as cnt from patient_registration where  patient_registration_id= '734' and  office_id= '1' 
 Execution Time:0.00043201446533203

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=734  
 Execution Time:0.0037379264831543

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=734  
 Execution Time:0.00081491470336914

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='734' and  office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016379356384277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016379356384277

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059413909912109

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00049090385437012

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063180923461914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063180923461914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040700435638428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063180923461914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040700435638428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063180923461914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040700435638428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051519870758057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063180923461914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040700435638428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051519870758057

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063180923461914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040700435638428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051519870758057

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024001598358154

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008


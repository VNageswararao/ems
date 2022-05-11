select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026290416717529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026290416717529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0066549777984619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026290416717529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0066549777984619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026290416717529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0066549777984619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031428337097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026290416717529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0066549777984619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031428337097168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032219886779785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035531520843506

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.00072598457336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select count(*) as cnt from patient_registration where  patient_registration_id= '984' and  office_id= '1' 
 Execution Time:0.0011560916900635

select count(*) as cnt from patient_registration where  patient_registration_id= '984' and  office_id= '1' 
 Execution Time:0.0011560916900635

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='984' and  doctors_registration.office_id= '1' 
 Execution Time:0.0065879821777344

select count(*) as cnt from patient_registration where  patient_registration_id= '984' and  office_id= '1' 
 Execution Time:0.0011560916900635

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='984' and  doctors_registration.office_id= '1' 
 Execution Time:0.0065879821777344

select fname,lname,mrdno from patient_registration where  patient_registration_id='984' and  office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057196617126465

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057196617126465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00019097328186035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011191368103027

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011191368103027

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011138916015625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011138916015625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058388710021973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028610229492188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019998550415039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019998550415039

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019359588623047

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-18' and  '2021-10-18' and  billing_master.office_id= 1        
 Execution Time:0.0016670227050781

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-18' and  '2021-10-18' and  billing_master.office_id= 1        
 Execution Time:0.0016670227050781

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-18' and '2021-10-18' and  patient_registration.office_id= 1      
 Execution Time:0.0037679672241211

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00076079368591309

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00076079368591309

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00089216232299805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00089216232299805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016729831695557

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00559401512146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00559401512146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00559401512146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00559401512146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00559401512146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00559401512146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00559401512146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00028896331787109

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00017094612121582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00047087669372559

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00047087669372559

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065708160400391

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065708160400391

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031149387359619

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034189224243164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034291744232178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043296813964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049805641174316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019598007202148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054693222045898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019299983978271

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0030221939086914

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0030221939086914

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030612945556641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021538734436035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052618980407715

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052618980407715

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043079853057861

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077509880065918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077509880065918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065088272094727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019950866699219

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048708915710449

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082707405090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044703483581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019879341125488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019772052764893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019772052764893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0019838809967041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031158924102783

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031158924102783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031158924102783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031158924102783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.00118088722229

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.00118088722229

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0029811859130859

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1    and billing_master.patient_registration_id=1575     
 Execution Time:0.0014479160308838

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1    and billing_master.patient_registration_id=1575     
 Execution Time:0.0014479160308838

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=1575   
 Execution Time:0.0015690326690674

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-26' and  '2021-10-19' and  billing_master.office_id= 1    and billing_master.patient_registration_id=1575     
 Execution Time:0.0013010501861572

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-26' and  '2021-10-19' and  billing_master.office_id= 1    and billing_master.patient_registration_id=1575     
 Execution Time:0.0013010501861572

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-09-26' and '2021-10-19' and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=1575   
 Execution Time:0.0024118423461914

select count(*) as cnt from patient_registration where  patient_registration_id= '348' and  office_id= '1' 
 Execution Time:0.00039815902709961

select count(*) as cnt from patient_registration where  patient_registration_id= '348' and  office_id= '1' 
 Execution Time:0.00039815902709961

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='348' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015280246734619

select count(*) as cnt from patient_registration where  patient_registration_id= '348' and  office_id= '1' 
 Execution Time:0.00039815902709961

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='348' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015280246734619

select fname,lname,mrdno from patient_registration where  patient_registration_id='348' and  office_id= '1' 
 Execution Time:0.00025606155395508

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005500316619873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076198577880859

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076198577880859

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011851787567139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011851787567139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011851787567139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011851787567139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011851787567139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011851787567139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011851787567139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090289115905762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011851787567139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090289115905762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021529197692871

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0004270076751709

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021770000457764

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00041985511779785

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00041985511779785

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097203254699707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097203254699707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053906440734863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032370090484619

select count(*) as cnt from patient_registration where  patient_registration_id= '1341' and  office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from patient_registration where  patient_registration_id= '1341' and  office_id= '1' 
 Execution Time:0.00040698051452637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1341' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021460056304932

select count(*) as cnt from patient_registration where  patient_registration_id= '1341' and  office_id= '1' 
 Execution Time:0.00040698051452637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1341' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021460056304932

select fname,lname,mrdno from patient_registration where  patient_registration_id='1341' and  office_id= '1' 
 Execution Time:0.00023102760314941

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003211498260498

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025796890258789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select count(*) as cnt from patient_registration where  patient_registration_id= '1341' and  office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_registration where  patient_registration_id= '1341' and  office_id= '1' 
 Execution Time:0.00050997734069824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1341' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027899742126465

select count(*) as cnt from patient_registration where  patient_registration_id= '1341' and  office_id= '1' 
 Execution Time:0.00050997734069824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1341' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027899742126465

select fname,lname,mrdno from patient_registration where  patient_registration_id='1341' and  office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002345085144043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002345085144043

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026988983154297

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00076699256896973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032289028167725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032289028167725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032289028167725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032289028167725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032289028167725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007321834564209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007321834564209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031170845031738

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00084495544433594

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00084495544433594

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047516822814941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047516822814941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005800724029541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002871036529541

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068807601928711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068807601928711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022602081298828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099992752075195

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099992752075195

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076389312744141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076389312744141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076389312744141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076389312744141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076389312744141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078392028808594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004094123840332

select count(*) as cnt from patient_registration where  patient_registration_id= '1331' and  office_id= '1' 
 Execution Time:0.00046801567077637

select count(*) as cnt from patient_registration where  patient_registration_id= '1331' and  office_id= '1' 
 Execution Time:0.00046801567077637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1331' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030100345611572

select count(*) as cnt from patient_registration where  patient_registration_id= '1331' and  office_id= '1' 
 Execution Time:0.00046801567077637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1331' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030100345611572

select fname,lname,mrdno from patient_registration where  patient_registration_id='1331' and  office_id= '1' 
 Execution Time:0.00032520294189453

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063109397888184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045919418334961

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00037384033203125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='722' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027561187744141

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00037384033203125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='722' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027561187744141

select fname,lname,mrdno from patient_registration where  patient_registration_id='722' and  office_id= '1' 
 Execution Time:0.0028131008148193

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063991546630859

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063991546630859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032520294189453

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018520355224609

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018520355224609

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017738342285156

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017738342285156

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0045819282531738

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083494186401367

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083494186401367

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015068054199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015068054199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015068054199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015068054199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015068054199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015068054199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015068054199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003352165222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015068054199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003352165222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047492980957031

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011091232299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011091232299805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024230480194092

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010230541229248

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010230541229248

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025606155395508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079083442687988

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079083442687988

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024030208587646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054812431335449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select count(*) as cnt from patient_registration where  patient_registration_id= '1514' and  office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from patient_registration where  patient_registration_id= '1514' and  office_id= '1' 
 Execution Time:0.00048995018005371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1514' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030641555786133

select count(*) as cnt from patient_registration where  patient_registration_id= '1514' and  office_id= '1' 
 Execution Time:0.00048995018005371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1514' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030641555786133

select fname,lname,mrdno from patient_registration where  patient_registration_id='1514' and  office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020289421081543

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1617' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026121139526367

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1617' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026121139526367

select fname,lname,mrdno from patient_registration where  patient_registration_id='1617' and  office_id= '1' 
 Execution Time:0.0011560916900635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.00045990943908691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1617' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032689571380615

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.00045990943908691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1617' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032689571380615

select fname,lname,mrdno from patient_registration where  patient_registration_id='1617' and  office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097799301147461

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097799301147461

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00067400932312012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040090084075928

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040090084075928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040090084075928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040090084075928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040090084075928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037407875061035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003115177154541

select count(*) as cnt from patient_registration where  patient_registration_id= '1232' and  office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from patient_registration where  patient_registration_id= '1232' and  office_id= '1' 
 Execution Time:0.00049805641174316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1232' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026299953460693

select count(*) as cnt from patient_registration where  patient_registration_id= '1232' and  office_id= '1' 
 Execution Time:0.00049805641174316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1232' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026299953460693

select fname,lname,mrdno from patient_registration where  patient_registration_id='1232' and  office_id= '1' 
 Execution Time:0.00029182434082031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020194053649902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074279308319092

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074279308319092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074279308319092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.010110139846802

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074279308319092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.010110139846802

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074279308319092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.010110139846802

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select count(*) as cnt from billing_master where  billing_master_id= '263' and  office_id= '1' 
 Execution Time:0.0054221153259277

select count(*) as cnt from billing_master where  billing_master_id= '263' and  office_id= '1' 
 Execution Time:0.0054221153259277

select * from billing_master where  billing_master_id= '263' and  office_id= '1' 
 Execution Time:0.0045871734619141

select count(*) as cnt from billing_master where  billing_master_id= '263' and  office_id= '1' 
 Execution Time:0.0054221153259277

select * from billing_master where  billing_master_id= '263' and  office_id= '1' 
 Execution Time:0.0045871734619141

select * from billing_detail where  billing_master_id= '263' 
 Execution Time:0.0040478706359863

select count(*) as cnt from billing_master where  billing_master_id= '263' and  office_id= '1' 
 Execution Time:0.0054221153259277

select * from billing_master where  billing_master_id= '263' and  office_id= '1' 
 Execution Time:0.0045871734619141

select * from billing_detail where  billing_master_id= '263' 
 Execution Time:0.0040478706359863

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0029129981994629

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.001270055770874

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.001270055770874

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0027148723602295

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.0033321380615234

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.0033321380615234

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1617' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051851272583008

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.0033321380615234

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1617' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051851272583008

select fname,lname,mrdno from patient_registration where  patient_registration_id='1617' and  office_id= '1' 
 Execution Time:0.0010929107666016

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.0017361640930176

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.0017361640930176

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1617' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053260326385498

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.0017361640930176

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1617' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053260326385498

select fname,lname,mrdno from patient_registration where  patient_registration_id='1617' and  office_id= '1' 
 Execution Time:0.0024020671844482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048830509185791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048830509185791

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048830509185791

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058131217956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048830509185791

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058131217956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029177665710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048830509185791

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058131217956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029177665710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046238899230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048830509185791

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058131217956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029177665710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046238899230957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002457857131958

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048830509185791

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058131217956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029177665710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046238899230957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002457857131958

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076889991760254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087070465087891

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087070465087891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028090476989746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087070465087891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028090476989746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0047330856323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087070465087891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028090476989746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0047330856323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021138191223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087070465087891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028090476989746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0047330856323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021138191223145

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0069200992584229

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.0045590400695801

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.0045590400695801

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1617' and  doctors_registration.office_id= '1' 
 Execution Time:0.003371000289917

select count(*) as cnt from patient_registration where  patient_registration_id= '1617' and  office_id= '1' 
 Execution Time:0.0045590400695801

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1617' and  doctors_registration.office_id= '1' 
 Execution Time:0.003371000289917

select fname,lname,mrdno from patient_registration where  patient_registration_id='1617' and  office_id= '1' 
 Execution Time:0.0035979747772217

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020790100097656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020790100097656

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013279914855957

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00077486038208008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056731700897217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056731700897217

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047359466552734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056731700897217

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047359466552734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010910034179688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056731700897217

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047359466552734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010910034179688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003432035446167

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056731700897217

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047359466552734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010910034179688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003432035446167

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056731700897217

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047359466552734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010910034179688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003432035446167

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047180652618408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038928985595703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056731700897217

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047359466552734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010910034179688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003432035446167

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047180652618408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083179473876953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022070407867432

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022070407867432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022070407867432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022070407867432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022070407867432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042178630828857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042178630828857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0020527839660645

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.00099587440490723

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.00099587440490723

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0020568370819092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070381164550781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070381164550781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030009746551514

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039505958557129

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020813941955566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037109851837158

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056910514831543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056910514831543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058507919311523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.008141040802002

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.008141040802002

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032269954681396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003119945526123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003119945526123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003119945526123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003119945526123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003119945526123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078201293945312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003119945526123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078201293945312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003119945526123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078201293945312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003119945526123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078201293945312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055313110351562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036520957946777

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043981075286865

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043981075286865

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043981075286865

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043981075286865

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043981075286865

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select count(*) as cnt from patient_registration where  patient_registration_id= '1625' and  office_id= '1' 
 Execution Time:0.00061893463134766

select count(*) as cnt from patient_registration where  patient_registration_id= '1625' and  office_id= '1' 
 Execution Time:0.00061893463134766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1625' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028619766235352

select count(*) as cnt from patient_registration where  patient_registration_id= '1625' and  office_id= '1' 
 Execution Time:0.00061893463134766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1625' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028619766235352

select fname,lname,mrdno from patient_registration where  patient_registration_id='1625' and  office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012180805206299

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012180805206299

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038361549377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033283233642578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015130043029785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015130043029785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032219886779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032219886779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032219886779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040149688720703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032219886779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040149688720703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021460056304932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032219886779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040149688720703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021460056304932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052728652954102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032219886779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040149688720703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021460056304932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052728652954102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021548271179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032219886779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040149688720703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021460056304932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052728652954102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021548271179199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003957986831665

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032219886779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040149688720703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021460056304932

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052728652954102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021548271179199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003957986831665

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083479881286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066590309143066

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037622451782227

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005640983581543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005640983581543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005281925201416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005281925201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019187927246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005281925201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019187927246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040109157562256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005281925201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019187927246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040109157562256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012850761413574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005281925201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019187927246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040109157562256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012850761413574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005281925201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019187927246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040109157562256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012850761413574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005281925201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019187927246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040109157562256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012850761413574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005281925201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019187927246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040109157562256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012850761413574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043201446533203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023989677429199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036001205444336

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033190250396729

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033190250396729

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018160343170166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022141933441162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022141933441162

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022141933441162

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065898895263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022141933441162

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065898895263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022141933441162

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065898895263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015468597412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022141933441162

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065898895263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015468597412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060710906982422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081300735473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081300735473633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034551620483398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034551620483398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034551620483398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034551620483398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034551620483398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00058603286743164

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00058603286743164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='722' and  doctors_registration.office_id= '1' 
 Execution Time:0.003026008605957

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.00058603286743164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='722' and  doctors_registration.office_id= '1' 
 Execution Time:0.003026008605957

select fname,lname,mrdno from patient_registration where  patient_registration_id='722' and  office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025260448455811

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025260448455811

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.001863956451416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055220127105713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055220127105713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055220127105713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055220127105713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055220127105713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007939338684082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036571025848389

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055758953094482

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055758953094482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074610710144043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055758953094482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074610710144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076298713684082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055758953094482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074610710144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076298713684082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0097558498382568

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055758953094482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0074610710144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076298713684082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0097558498382568

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0077948570251465

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.0049068927764893

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.0049068927764893

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1537' and  doctors_registration.office_id= '1' 
 Execution Time:0.0076971054077148

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.0049068927764893

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1537' and  doctors_registration.office_id= '1' 
 Execution Time:0.0076971054077148

select fname,lname,mrdno from patient_registration where  patient_registration_id='1537' and  office_id= '1' 
 Execution Time:0.0037600994110107

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.014705896377563

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.014705896377563

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028791427612305

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0038130283355713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079970359802246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079970359802246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079970359802246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012290477752686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079970359802246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012290477752686

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.010108947753906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079970359802246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012290477752686

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.010108947753906

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0017008781433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023760795593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023760795593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021700859069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023760795593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021700859069824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024399757385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023760795593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021700859069824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024399757385254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071060657501221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023760795593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021700859069824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024399757385254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071060657501221

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034129619598389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023760795593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021700859069824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024399757385254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071060657501221

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034129619598389

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080239772796631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013821125030518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013821125030518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013821125030518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060701370239258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013821125030518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060701370239258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013821125030518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060701370239258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013821125030518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060701370239258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0064430236816406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 41 
 Execution Time:0.0039780139923096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001345157623291

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003741979598999

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.0035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.00065803527832031

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.00065803527832031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1630' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037841796875

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.00065803527832031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1630' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037841796875

select fname,lname,mrdno from patient_registration where  patient_registration_id='1630' and  office_id= '1' 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031960010528564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031960010528564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031960010528564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031960010528564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031960010528564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.00050616264343262

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.00050616264343262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1630' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019140243530273

select count(*) as cnt from patient_registration where  patient_registration_id= '1630' and  office_id= '1' 
 Execution Time:0.00050616264343262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1630' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019140243530273

select fname,lname,mrdno from patient_registration where  patient_registration_id='1630' and  office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001446008682251

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001446008682251

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027799606323242

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00086402893066406

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051810741424561

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051810741424561

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043501853942871

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051810741424561

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043501853942871

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024099349975586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051810741424561

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043501853942871

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024099349975586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038621425628662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051810741424561

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043501853942871

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024099349975586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038621425628662

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032186508178711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032186508178711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032186508178711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032186508178711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005638599395752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026838779449463

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026838779449463

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0072021484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013210773468018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048880577087402

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037951469421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013210773468018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048439502716064

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001039981842041

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001039981842041

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001060962677002

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001060962677002

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015480518341064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015480518341064

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015480518341064

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015358924865723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015480518341064

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015358924865723

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045998096466064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015480518341064

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015358924865723

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045998096466064

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075430870056152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082302093505859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082302093505859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082302093505859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082302093505859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058913230895996

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062823295593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062823295593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062823295593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062823295593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062823295593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080490112304688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062823295593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080490112304688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037569999694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004162073135376

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004162073135376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003410816192627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004162073135376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003410816192627

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047750473022461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022499561309814

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004162073135376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003410816192627

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047750473022461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050981044769287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078799724578857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078799724578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078799724578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024919509887695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078799724578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024919509887695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078799724578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024919509887695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078799724578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024919509887695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040488243103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078799724578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024919509887695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040488243103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073471069335938

select count(*) as cnt from patient_registration where  patient_registration_id= '1395' and  office_id= '1' 
 Execution Time:0.003450870513916

select count(*) as cnt from patient_registration where  patient_registration_id= '1395' and  office_id= '1' 
 Execution Time:0.003450870513916

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1395' and  doctors_registration.office_id= '1' 
 Execution Time:0.010565042495728

select count(*) as cnt from patient_registration where  patient_registration_id= '1395' and  office_id= '1' 
 Execution Time:0.003450870513916

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1395' and  doctors_registration.office_id= '1' 
 Execution Time:0.010565042495728

select fname,lname,mrdno from patient_registration where  patient_registration_id='1395' and  office_id= '1' 
 Execution Time:0.0035390853881836

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046491622924805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054097175598145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032138824462891

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032138824462891

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0051109790802002

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0044949054718018

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0044949054718018

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003777027130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083858966827393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083858966827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.023051977157593

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083858966827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.023051977157593

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083858966827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.023051977157593

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039398670196533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083858966827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.023051977157593

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039398670196533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0061731338500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083858966827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.023051977157593

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039398670196533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0061731338500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022478103637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083858966827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.023051977157593

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039398670196533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0061731338500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022478103637695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.013267993927002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083858966827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.023051977157593

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039398670196533

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0061731338500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022478103637695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.013267993927002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083498954772949

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.00037407875061035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1537' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046539306640625

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.00037407875061035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1537' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046539306640625

select fname,lname,mrdno from patient_registration where  patient_registration_id='1537' and  office_id= '1' 
 Execution Time:0.0036869049072266

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0055661201477051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0055661201477051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0023870468139648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042698383331299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042698383331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042698383331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042698383331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001582145690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042698383331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001582145690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042698383331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001582145690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042698383331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001582145690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086092948913574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042698383331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042290687561035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001582145690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086092948913574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040709972381592

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00091099739074707

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00091099739074707

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036690235137939

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036690235137939

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0021209716796875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012960433959961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012960433959961

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034208297729492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017540454864502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017540454864502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017540454864502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037729740142822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038402080535889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017540454864502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037729740142822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038402080535889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017540454864502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037729740142822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038402080535889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017540454864502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037729740142822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038402080535889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055885314941406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022971630096436

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0016040802001953

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0016040802001953

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00078511238098145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080749988555908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080749988555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041260719299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080749988555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041260719299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080749988555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041260719299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080749988555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041260719299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037829875946045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080749988555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041260719299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037829875946045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080749988555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041260719299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037829875946045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037469863891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080749988555908

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041260719299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037829875946045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037808418273926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037469863891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093729496002197

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059390068054199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059390068054199

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030183792114258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054399967193604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054399967193604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046789646148682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054399967193604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046789646148682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036971569061279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054399967193604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046789646148682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036971569061279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047140121459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054399967193604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046789646148682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036971569061279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047140121459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006317138671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054399967193604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046789646148682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036971569061279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047140121459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006317138671875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014538764953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034599304199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054399967193604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046789646148682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036971569061279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047140121459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006317138671875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014538764953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074141025543213

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029110908508301

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021398067474365

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021398067474365

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020909309387207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022509098052979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057950019836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057950019836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057950019836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057950019836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038080215454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028870105743408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057950019836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038080215454102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066289901733398

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00055408477783203

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.001945972442627

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0095617771148682

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0095617771148682

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002147912979126

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015890598297119

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015890598297119

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072312355041504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072312355041504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027370452880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027370452880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027370452880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054090023040771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027370452880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054090023040771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025680065155029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027370452880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054090023040771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025680065155029

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032408237457275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027370452880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070500373840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054090023040771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025680065155029

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032408237457275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004770040512085

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052549839019775

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052549839019775

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026679039001465

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.0051710605621338

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.0051710605621338

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.010941028594971

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0083158016204834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0083158016204834

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0058829784393311

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0048210620880127

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0048210620880127

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017759799957275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029430389404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029430389404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048301219940186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029430389404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048301219940186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033280849456787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029430389404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048301219940186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033280849456787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017080307006836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029430389404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048301219940186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033280849456787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017080307006836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029430389404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048301219940186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033280849456787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017080307006836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029430389404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048301219940186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033280849456787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017080307006836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037250518798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029430389404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048301219940186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033280849456787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017080307006836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037250518798828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046041011810303

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048270225524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048270225524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034091472625732

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0076639652252197

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041441917419434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041441917419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.034826040267944

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041441917419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.034826040267944

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0054459571838379

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041441917419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.034826040267944

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0054459571838379

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.057389974594116

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.057389974594116

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038979053497314

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.0036630630493164

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-19' and  '2021-10-19' and  billing_master.office_id= 1        
 Execution Time:0.0036630630493164

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0059061050415039

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.01990008354187

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.01990008354187

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0051639080047607

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.01990008354187

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0051639080047607

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.001755952835083

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.01990008354187

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0051639080047607

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.001755952835083

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045449733734131

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.01990008354187

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0051639080047607

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.001755952835083

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045449733734131

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00091385841369629

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.01990008354187

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0051639080047607

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.001755952835083

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045449733734131

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00091385841369629

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0009000301361084

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.01990008354187

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0051639080047607

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.001755952835083

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045449733734131

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00091385841369629

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0009000301361084

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0012691020965576

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1        and billing_detail.charge_id=5  
 Execution Time:0.01990008354187

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.0051639080047607

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.001755952835083

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045449733734131

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00091385841369629

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0009000301361084

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0012691020965576

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0053648948669434

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=5  
 Execution Time:0.003507137298584

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=5  
 Execution Time:0.003507137298584

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=1 
 Execution Time:0.010383129119873

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1      and billing_master.doctor_id=2   and billing_detail.charge_id=5  
 Execution Time:0.0083398818969727

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1      and billing_master.doctor_id=2   and billing_detail.charge_id=5  
 Execution Time:0.0083398818969727

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=2 
 Execution Time:0.0086088180541992

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1      and billing_master.doctor_id=2   and billing_detail.charge_id=5  
 Execution Time:0.0083398818969727

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=2 
 Execution Time:0.0086088180541992

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.0071530342102051

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1      and billing_master.doctor_id=2   and billing_detail.charge_id=5  
 Execution Time:0.0083398818969727

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=2 
 Execution Time:0.0086088180541992

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.0071530342102051

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045740604400635

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1      and billing_master.doctor_id=2   and billing_detail.charge_id=5  
 Execution Time:0.0083398818969727

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=2 
 Execution Time:0.0086088180541992

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.0071530342102051

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045740604400635

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.001478910446167

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1      and billing_master.doctor_id=2   and billing_detail.charge_id=5  
 Execution Time:0.0083398818969727

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=2 
 Execution Time:0.0086088180541992

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.0071530342102051

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045740604400635

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.001478910446167

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.003748893737793

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1      and billing_master.doctor_id=2   and billing_detail.charge_id=5  
 Execution Time:0.0083398818969727

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=2 
 Execution Time:0.0086088180541992

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.0071530342102051

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045740604400635

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.001478910446167

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.003748893737793

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0047619342803955

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-10-19' and '2021-10-19' and  billing_master.office_id= 1      and billing_master.doctor_id=2   and billing_detail.charge_id=5  
 Execution Time:0.0083398818969727

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-19' and '2021-10-19' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=2 
 Execution Time:0.0086088180541992

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.0071530342102051

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0045740604400635

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.001478910446167

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.003748893737793

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0047619342803955

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0037539005279541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059940814971924

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059940814971924

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059940814971924

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059940814971924

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015101432800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059940814971924

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015101432800293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059940814971924

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015101432800293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036420822143555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059940814971924

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015101432800293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036420822143555

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059940814971924

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003777027130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015101432800293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036420822143555

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075507164001465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005634069442749

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017120838165283

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017120838165283

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018279552459717

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032668113708496

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032668113708496

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039989948272705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091428756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091428756713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091428756713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091428756713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091428756713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091428756713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042140483856201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091428756713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042140483856201

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075387954711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091428756713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042140483856201

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075387954711914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043931007385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003756046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003756046295166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058529376983643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003756046295166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058529376983643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031328201293945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003756046295166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058529376983643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031328201293945

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003385066986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003734827041626

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003756046295166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058529376983643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031328201293945

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003385066986084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006756067276001

select count(*) as cnt from patient_registration where  patient_registration_id= '1311' and  office_id= '1' 
 Execution Time:0.0047731399536133

select count(*) as cnt from patient_registration where  patient_registration_id= '1311' and  office_id= '1' 
 Execution Time:0.0047731399536133

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1311' and  doctors_registration.office_id= '1' 
 Execution Time:0.0090830326080322

select count(*) as cnt from patient_registration where  patient_registration_id= '1311' and  office_id= '1' 
 Execution Time:0.0047731399536133

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1311' and  doctors_registration.office_id= '1' 
 Execution Time:0.0090830326080322

select fname,lname,mrdno from patient_registration where  patient_registration_id='1311' and  office_id= '1' 
 Execution Time:0.0096640586853027

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0020418167114258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0020418167114258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0050859451293945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034260749816895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034260749816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034260749816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004871129989624

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034260749816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004871129989624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034260749816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004871129989624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081777572631836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081777572631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081777572631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081777572631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081777572631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081777572631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013120174407959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081777572631836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013120174407959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039799213409424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041751861572266

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-01' and '2021-10-19' and  patient_registration.office_id= 1      
 Execution Time:0.011029958724976

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026018619537354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026018619537354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026018619537354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026018619537354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164


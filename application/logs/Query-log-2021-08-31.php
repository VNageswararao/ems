select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-31' and '2021-08-31' and  patient_registration.office_id= 1      
 Execution Time:0.00087809562683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020010471343994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020010471343994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021820068359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020010471343994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021820068359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020010471343994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021820068359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020010471343994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021820068359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035929679870605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020010471343994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021820068359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035929679870605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012288093566895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012288093566895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012288093566895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012288093566895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012288093566895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023839473724365

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050520896911621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050520896911621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050520896911621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050520896911621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-31' and '2021-08-31' and  billing_master.office_id= 1       
 Execution Time:0.0011470317840576


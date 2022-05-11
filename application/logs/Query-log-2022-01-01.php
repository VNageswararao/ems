select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021431446075439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024311542510986

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021431446075439

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00066304206848145

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00066304206848145

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00059819221496582

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00059819221496582

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00053501129150391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00025796890258789


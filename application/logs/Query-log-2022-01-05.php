select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029089450836182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029089450836182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029089450836182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029089450836182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029089450836182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002187967300415

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029089450836182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002187967300415

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029089450836182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002187967300415

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029089450836182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002187967300415

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028679370880127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029089450836182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002187967300415

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028679370880127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029089450836182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002187967300415

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028679370880127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0048677921295166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.05128002166748


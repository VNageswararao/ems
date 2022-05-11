select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026938915252686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026938915252686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026938915252686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017368793487549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026938915252686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017368793487549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019619464874268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026938915252686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017368793487549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019619464874268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026938915252686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017368793487549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019619464874268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026938915252686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017368793487549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019619464874268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026938915252686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017368793487549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019619464874268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038719177246094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109


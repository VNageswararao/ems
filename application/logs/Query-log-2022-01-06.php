select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.07677698135376

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.07677698135376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.07677698135376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.07677698135376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.047779083251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.07677698135376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.047779083251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.06005597114563

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.07677698135376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.047779083251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.06005597114563

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.060523986816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.07677698135376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.047779083251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.06005597114563

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.060523986816406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.07677698135376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.047779083251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.06005597114563

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.060523986816406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.084516048431396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.07677698135376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.047779083251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.06005597114563

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.060523986816406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.084516048431396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083119869232178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.07677698135376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.047779083251953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.06005597114563

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.060523986816406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.084516048431396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083119869232178

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.069304943084717


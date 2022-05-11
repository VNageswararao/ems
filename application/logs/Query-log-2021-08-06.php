select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031468868255615

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031468868255615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031468868255615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031468868255615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031468868255615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023660659790039

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023891925811768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023541450500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023541450500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023541450500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038161277770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023541450500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038161277770996

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469


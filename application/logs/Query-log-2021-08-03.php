select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025770664215088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025770664215088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002122163772583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025770664215088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002122163772583

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025770664215088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002122163772583

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025770664215088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002122163772583

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040140151977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002493143081665

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025770664215088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002122163772583

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040140151977539

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010106086730957


select * from office where  office_id= '1' 
 Execution Time:0.0039370059967041

select * from office where  office_id= '1' 
 Execution Time:0.00098896026611328

select * from office where  office_id= '1' 
 Execution Time:0.0010819435119629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.002208948135376

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026907920837402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026907920837402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026907920837402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031828880310059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026907920837402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031828880310059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026907920837402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031828880310059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026907920837402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031828880310059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026907920837402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031828880310059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.014738082885742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026907920837402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031828880310059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.014738082885742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016419887542725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026907920837402

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031828880310059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073003768920898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.014738082885742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016419887542725

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.020809888839722


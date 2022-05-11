select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019099712371826

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019099712371826

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018670558929443

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019099712371826

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018670558929443

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0019419193267822

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019099712371826

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018670558929443

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0019419193267822

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021421909332275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080070495605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080070495605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080070495605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080070495605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080070495605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0090811252593994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080070495605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0090811252593994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080070495605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0090811252593994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.025672197341919

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080070495605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023548603057861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0090811252593994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.025672197341919

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375


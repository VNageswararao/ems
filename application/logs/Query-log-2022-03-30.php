select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026450157165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026450157165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026450157165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026450157165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029761791229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026450157165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029761791229248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017869472503662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026450157165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029761791229248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017869472503662

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025689601898193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015010833740234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015010833740234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077295303344727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077295303344727

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056910514831543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056910514831543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098299980163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098299980163574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098299980163574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032339096069336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032339096069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030331611633301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032339096069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030331611633301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0030930042266846

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0032339096069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030331611633301

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0030930042266846

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 714 
 Execution Time:0.001054048538208

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 817 
 Execution Time:0.00040483474731445

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 817  and `patient_registration_id` = 714 
 Execution Time:0.002810001373291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0103919506073

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0103919506073

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 714 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 817 
 Execution Time:0.00021600723266602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 817  and `patient_registration_id` = 714 
 Execution Time:0.00034809112548828

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 714 
 Execution Time:0.0013260841369629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034568309783936

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034568309783936

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select * from examination where examination_id= '739' and   office_id= '1' 
 Execution Time:0.00098204612731934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 739 
 Execution Time:0.0026290416717529

select * from examination_chargesdetails where  examination_id= '739' 
 Execution Time:0.0028269290924072

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='60' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0033860206604004

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='94' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010688304901123

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024480819702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024480819702148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024480819702148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024480819702148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007789134979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024480819702148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007789134979248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013289451599121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024480819702148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007789134979248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013289451599121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064396858215332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064396858215332

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010261535644531

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 715 
 Execution Time:0.00038409233093262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 818 
 Execution Time:0.00045490264892578

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 818  and `patient_registration_id` = 715 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077509880065918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077509880065918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016059875488281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016059875488281

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078296661376953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015218257904053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078296661376953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015218257904053

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 715 
 Execution Time:0.00031614303588867

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 818 
 Execution Time:0.00024890899658203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 818  and `patient_registration_id` = 715 
 Execution Time:0.00022602081298828

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 715 
 Execution Time:0.001939058303833

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020129680633545

select * from examination where examination_id= '740' and   office_id= '1' 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 740 
 Execution Time:0.00092887878417969

select * from examination_chargesdetails where  examination_id= '740' 
 Execution Time:0.00049495697021484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007631778717041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007631778717041

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042891502380371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 715 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 818 
 Execution Time:0.00030708312988281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 818  and `patient_registration_id` = 715 
 Execution Time:0.00026607513427734

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 715 
 Execution Time:0.0012571811676025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063991546630859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063991546630859

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003209114074707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087404251098633

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087404251098633

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from examination where examination_id= '740' and   office_id= '1' 
 Execution Time:0.00078511238098145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 740 
 Execution Time:0.00029897689819336

select * from examination_chargesdetails where  examination_id= '740' 
 Execution Time:0.00029706954956055

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='23' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014069080352783

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070095062255859

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00098299980163574

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00098299980163574

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0036871433258057

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00098299980163574

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0036871433258057

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=260  
 Execution Time:0.0016078948974609

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00098299980163574

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0036871433258057

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=260  
 Execution Time:0.0016078948974609

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='260' and  office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049114227294922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049114227294922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059413909912109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059413909912109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059413909912109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097417831420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059413909912109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097417831420898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021510124206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059413909912109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097417831420898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021510124206543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00066590309143066

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0029280185699463

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00066590309143066

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0029280185699463

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=260  
 Execution Time:0.0010900497436523

select count(*) as cnt from patient_registration where  patient_registration_id= '260' and  office_id= '1' 
 Execution Time:0.00066590309143066

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=260  
 Execution Time:0.0029280185699463

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=260  
 Execution Time:0.0010900497436523

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='260' and  office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042486190795898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_appointment where  patient_registration_id = 260 and appointment_date= '2022-03-30' 
 Execution Time:0.0017480850219727

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 260 
 Execution Time:0.00039315223693848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 819 
 Execution Time:0.00027608871459961

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 819  and `patient_registration_id` = 260 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007469654083252

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007469654083252

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 467 
 Execution Time:0.001554012298584

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 815 
 Execution Time:0.00045204162597656

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 815  and `patient_registration_id` = 467 
 Execution Time:0.0078439712524414

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 467 
 Execution Time:0.0025060176849365

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015871524810791

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 467 
 Execution Time:0.00037312507629395

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 815 
 Execution Time:0.00035500526428223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 815  and `patient_registration_id` = 467 
 Execution Time:0.00055503845214844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 467 
 Execution Time:0.0017669200897217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022761821746826

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022761821746826

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select * from examination where examination_id= '738' and   office_id= '1' 
 Execution Time:0.0010280609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 738 
 Execution Time:0.0016050338745117

select * from examination_chargesdetails where  examination_id= '738' 
 Execution Time:0.0035820007324219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007789134979248

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007789134979248

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040411949157715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 260 
 Execution Time:0.0005040168762207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 819 
 Execution Time:0.00037193298339844

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 819  and `patient_registration_id` = 260 
 Execution Time:0.00088405609130859

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 260 
 Execution Time:0.0013809204101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select * from examination where examination_id= '741' and   office_id= '1' 
 Execution Time:0.0038049221038818

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 741 
 Execution Time:0.00078916549682617

select * from examination_chargesdetails where  examination_id= '741' 
 Execution Time:0.00046396255493164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011811256408691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011811256408691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001093864440918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001093864440918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018701553344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018701553344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018701553344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018701553344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0090498924255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018701553344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0090498924255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018701553344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0090498924255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021688938140869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018701553344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0090498924255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021688938140869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002518892288208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018701553344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0090498924255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021688938140869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002518892288208

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018479824066162

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006859302520752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017259120941162

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006859302520752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060582160949707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060582160949707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040507316589355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040507316589355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052618980407715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052618980407715

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043916702270508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043916702270508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043916702270508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075411796569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043916702270508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075411796569824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043916702270508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075411796569824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042619705200195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042619705200195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-01' and '2022-03-30' and  patient_registration.office_id= 1      
 Execution Time:0.020907878875732

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021700859069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021700859069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-01' and '2022-03-30' and  patient_registration.office_id= 1      
 Execution Time:0.016870021820068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064492225646973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014238357543945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064492225646973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014238357543945

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025160312652588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025160312652588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025160312652588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025160312652588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025160312652588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020439624786377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025160312652588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020439624786377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025160312652588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020439624786377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025160312652588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020439624786377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025501251220703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025160312652588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020439624786377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025501251220703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025160312652588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021319389343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020439624786377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025501251220703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00089502334594727

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00089502334594727

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00017499923706055

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0006871223449707

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0006871223449707

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00034117698669434

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00092697143554688

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00092697143554688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057721138000488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057721138000488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057721138000488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057721138000488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057721138000488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057721138000488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057721138000488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029230117797852

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029230117797852

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0033080577850342

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029230117797852

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0033080577850342

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.00051689147949219

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.00027108192443848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.0035898685455322

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033979415893555

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033979415893555

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051784515380859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.00027894973754883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011792182922363

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011792182922363

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.00036907196044922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.00028109550476074

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.00064396858215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007939338684082

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007939338684082

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035715103149414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.00028491020202637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.00025105476379395

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.00033092498779297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 202 
 Execution Time:0.00061583518981934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037968158721924

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037968158721924

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050210952758789

select * from examination where examination_id= '99' and   office_id= '1' 
 Execution Time:0.00068998336791992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 99 
 Execution Time:0.0047738552093506

select * from examination_chargesdetails where  examination_id= '99' 
 Execution Time:0.0036158561706543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094294548034668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094294548034668

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.00047016143798828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.00041699409484863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.00043296813964844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 202 
 Execution Time:0.0006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select * from examination where examination_id= '99' and   office_id= '1' 
 Execution Time:0.0015120506286621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 99 
 Execution Time:0.00078487396240234

select * from examination_chargesdetails where  examination_id= '99' 
 Execution Time:0.0038678646087646

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069117546081543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069117546081543

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075793266296387

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066208839416504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066208839416504

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005180835723877

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.00068998336791992

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.00049281120300293

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.00067305564880371

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 202 
 Execution Time:0.0016191005706787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select * from examination where examination_id= '99' and   office_id= '1' 
 Execution Time:0.0022330284118652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 99 
 Execution Time:0.00053501129150391

select * from examination_chargesdetails where  examination_id= '99' 
 Execution Time:0.00099301338195801

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003464937210083

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003464937210083

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0035490989685059

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018429756164551

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018429756164551

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.001338005065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020999908447266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020999908447266

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012149810791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020999908447266

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069594383239746

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069594383239746

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054097175598145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054097175598145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087904930114746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087904930114746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019838809967041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087904930114746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019838809967041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.016867160797119

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.016867160797119

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.019421100616455

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.04430103302002

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.016867160797119

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.019421100616455

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.04430103302002

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.012784957885742

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.016867160797119

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.019421100616455

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.04430103302002

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.012784957885742

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 716 
 Execution Time:0.004601001739502

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 820 
 Execution Time:0.003507137298584

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 820  and `patient_registration_id` = 716 
 Execution Time:0.0097169876098633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.015037059783936

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.015037059783936

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0056939125061035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015931129455566

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015931129455566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034680366516113

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015931129455566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034680366516113

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015931129455566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034680366516113

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 716 
 Execution Time:0.00057291984558105

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 820 
 Execution Time:0.00074100494384766

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 820  and `patient_registration_id` = 716 
 Execution Time:0.0032999515533447

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 716 
 Execution Time:0.0050559043884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.041975021362305

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.041975021362305

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038628578186035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0055630207061768

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0055630207061768

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0079779624938965

select * from examination where examination_id= '742' and   office_id= '1' 
 Execution Time:0.0013048648834229

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025081634521484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 742 
 Execution Time:0.056932926177979

select * from examination_chargesdetails where  examination_id= '742' 
 Execution Time:0.023952960968018

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.10475015640259

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 716 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 820 
 Execution Time:0.00031495094299316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 820  and `patient_registration_id` = 716 
 Execution Time:0.00024914741516113

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 716 
 Execution Time:0.0017709732055664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select * from examination where examination_id= '742' and   office_id= '1' 
 Execution Time:0.00087499618530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 742 
 Execution Time:0.00042200088500977

select * from examination_chargesdetails where  examination_id= '742' 
 Execution Time:0.0004119873046875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037908554077148

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0006101131439209

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011348724365234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056719779968262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056719779968262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.011776924133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056719779968262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.011776924133301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086851119995117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0025150775909424

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056719779968262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.011776924133301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086851119995117

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00040912628173828

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018248558044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018248558044434

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014369487762451

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 717 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 821 
 Execution Time:0.00027298927307129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 821  and `patient_registration_id` = 717 
 Execution Time:0.00082802772521973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00189208984375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00189208984375

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 717 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 821 
 Execution Time:0.00031208992004395

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 821  and `patient_registration_id` = 717 
 Execution Time:0.00033211708068848

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 717 
 Execution Time:0.0012400150299072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014269351959229

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014269351959229

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057792663574219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022428035736084

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022428035736084

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054812431335449

select * from examination where examination_id= '743' and   office_id= '1' 
 Execution Time:0.00085282325744629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 743 
 Execution Time:0.0019419193267822

select * from examination_chargesdetails where  examination_id= '743' 
 Execution Time:0.0032510757446289

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001288890838623

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00092697143554688

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068497657775879

select count(*) as cnt from patient_registration where  patient_registration_id= '472' and  office_id= '1' 
 Execution Time:0.00065207481384277

select count(*) as cnt from patient_registration where  patient_registration_id= '472' and  office_id= '1' 
 Execution Time:0.00065207481384277

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=472  
 Execution Time:0.004054069519043

select count(*) as cnt from patient_registration where  patient_registration_id= '472' and  office_id= '1' 
 Execution Time:0.00065207481384277

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=472  
 Execution Time:0.004054069519043

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=472  
 Execution Time:0.0010619163513184

select count(*) as cnt from patient_registration where  patient_registration_id= '472' and  office_id= '1' 
 Execution Time:0.00065207481384277

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=472  
 Execution Time:0.004054069519043

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=472  
 Execution Time:0.0010619163513184

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='472' and  office_id= '1' 
 Execution Time:0.00034284591674805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0038290023803711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0038290023803711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0024051666259766

select count(*) as cnt from patient_appointment where  patient_registration_id = 472 and appointment_date= '2022-03-30' 
 Execution Time:0.0021359920501709

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053691864013672

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053691864013672

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026178359985352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084400177001953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084400177001953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084400177001953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011940002441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084400177001953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011940002441406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084400177001953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011940002441406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0057768821716309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096583366394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096583366394043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096583366394043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033819675445557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020639896392822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020639896392822

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0074548721313477

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004279613494873

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026702880859375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063896179199219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021982192993164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021982192993164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021982192993164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021982192993164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011541843414307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021982192993164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011541843414307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012781620025635

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012781620025635

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012781620025635

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012781620025635

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001133918762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 472 
 Execution Time:0.00085091590881348

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 822 
 Execution Time:0.00023007392883301

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 822  and `patient_registration_id` = 472 
 Execution Time:0.00067400932312012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093507766723633

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093507766723633

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 718 
 Execution Time:0.00044012069702148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 823 
 Execution Time:0.00036001205444336

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 823  and `patient_registration_id` = 718 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083398818969727

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083398818969727

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 472 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 822 
 Execution Time:0.00024199485778809

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 822  and `patient_registration_id` = 472 
 Execution Time:0.00052309036254883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 472 
 Execution Time:0.001331090927124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028340816497803

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028340816497803

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066208839416504

select * from examination where examination_id= '744' and   office_id= '1' 
 Execution Time:0.00076007843017578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091981887817383

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 744 
 Execution Time:0.00066113471984863

select * from examination_chargesdetails where  examination_id= '744' 
 Execution Time:0.00059413909912109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052189826965332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052189826965332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00089621543884277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00089621543884277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 472 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 822 
 Execution Time:0.00031089782714844

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 822  and `patient_registration_id` = 472 
 Execution Time:0.00029516220092773

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 472 
 Execution Time:0.00098991394042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006251335144043

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006251335144043

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select * from examination where examination_id= '744' and   office_id= '1' 
 Execution Time:0.0010411739349365

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 744 
 Execution Time:0.00041294097900391

select * from examination_chargesdetails where  examination_id= '744' 
 Execution Time:0.00049018859863281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006101131439209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006101131439209

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 718 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 823 
 Execution Time:0.0017199516296387

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 823  and `patient_registration_id` = 718 
 Execution Time:0.00030303001403809

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 718 
 Execution Time:0.001924991607666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033071041107178

select * from examination where examination_id= '745' and   office_id= '1' 
 Execution Time:0.0031020641326904

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 745 
 Execution Time:0.0023748874664307

select * from examination_chargesdetails where  examination_id= '745' 
 Execution Time:0.00047707557678223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043392181396484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043392181396484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037813186645508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 472 
 Execution Time:0.00027990341186523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 822 
 Execution Time:0.0002129077911377

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 822  and `patient_registration_id` = 472 
 Execution Time:0.00017905235290527

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 472 
 Execution Time:0.0010828971862793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select * from examination where examination_id= '744' and   office_id= '1' 
 Execution Time:0.00084686279296875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 744 
 Execution Time:0.00041794776916504

select * from examination_chargesdetails where  examination_id= '744' 
 Execution Time:0.00043106079101562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003049373626709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067687034606934

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067687034606934

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028491020202637

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007779598236084

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 718 
 Execution Time:0.0013058185577393

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 823 
 Execution Time:0.00032496452331543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 823  and `patient_registration_id` = 718 
 Execution Time:0.00025796890258789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 718 
 Execution Time:0.0017709732055664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070714950561523

select * from examination where examination_id= '745' and   office_id= '1' 
 Execution Time:0.00088000297546387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 745 
 Execution Time:0.0002591609954834

select * from examination_chargesdetails where  examination_id= '745' 
 Execution Time:0.00019502639770508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012478828430176

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012478828430176

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014529228210449

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011229515075684

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='91' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010149478912354

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016419887542725

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 719 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 824 
 Execution Time:0.00047016143798828

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 824  and `patient_registration_id` = 719 
 Execution Time:0.0004279613494873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082015991210938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082015991210938

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029683113098145

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00034308433532715

SELECT *
FROM `examination`
WHERE `examination_id` = 353 
 Execution Time:0.00047206878662109

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00018095970153809

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00014781951904297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 362 
 Execution Time:0.00015807151794434

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00013613700866699

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=353 
 Execution Time:0.0016450881958008

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=353 
 Execution Time:0.00058889389038086

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=353 
 Execution Time:0.00065016746520996

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=353 
 Execution Time:0.0001978874206543

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='353' and office_id='1' 
 Execution Time:0.00095891952514648

select * from examination_chargesdetails where  examination_id= '353' 
 Execution Time:0.00014781951904297

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0017509460449219

SELECT *
FROM `examination`
WHERE `examination_id` = 344 
 Execution Time:0.0011270046234131

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029993057250977

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 364 
 Execution Time:0.00032782554626465

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 4 
 Execution Time:0.0002748966217041

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=344 
 Execution Time:0.0010819435119629

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=344 
 Execution Time:0.00047397613525391

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=344 
 Execution Time:0.00032305717468262

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=344 
 Execution Time:0.00049304962158203

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='344' and office_id='1' 
 Execution Time:0.000946044921875

select * from examination_chargesdetails where  examination_id= '344' 
 Execution Time:0.0003211498260498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017321109771729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017321109771729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017321109771729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017321109771729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0030331611633301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0068778991699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0068778991699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0068778991699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0068778991699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0068778991699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0068778991699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001924991607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0068778991699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001924991607666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025069713592529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0068778991699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053596496582031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001924991607666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025069713592529

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select count(*) as cnt from patient_registration where  patient_registration_id= '362' and  office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from patient_registration where  patient_registration_id= '362' and  office_id= '1' 
 Execution Time:0.0005180835723877

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=362  
 Execution Time:0.0031380653381348

select count(*) as cnt from patient_registration where  patient_registration_id= '362' and  office_id= '1' 
 Execution Time:0.0005180835723877

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=362  
 Execution Time:0.0031380653381348

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=362  
 Execution Time:0.00067615509033203

select count(*) as cnt from patient_registration where  patient_registration_id= '362' and  office_id= '1' 
 Execution Time:0.0005180835723877

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=362  
 Execution Time:0.0031380653381348

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=362  
 Execution Time:0.00067615509033203

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='362' and  office_id= '1' 
 Execution Time:0.00025701522827148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0023159980773926

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013759136199951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select * from office where  office_id= '1' 
 Execution Time:0.0018548965454102

select * from office where  office_id= '1' 
 Execution Time:0.0029771327972412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 362 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 391 
 Execution Time:0.00018501281738281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 391  and `patient_registration_id` = 362 
 Execution Time:0.00018095970153809

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 362 
 Execution Time:0.0012040138244629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select * from examination where examination_id= '353' and   office_id= '1' 
 Execution Time:0.00056815147399902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 353 
 Execution Time:0.0006411075592041

select * from examination_chargesdetails where  examination_id= '353' 
 Execution Time:0.0004889965057373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048518180847168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048518180847168

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074386596679688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074386596679688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028800964355469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 364 
 Execution Time:0.00032806396484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 393 
 Execution Time:0.0002291202545166

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 393  and `patient_registration_id` = 364 
 Execution Time:0.00052404403686523

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 364 
 Execution Time:0.0016319751739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084590911865234

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084590911865234

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from examination where examination_id= '344' and   office_id= '1' 
 Execution Time:0.00066184997558594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012238025665283

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 344 
 Execution Time:0.0015289783477783

select * from examination_chargesdetails where  examination_id= '344' 
 Execution Time:0.00064802169799805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031731128692627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031731128692627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031731128692627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031731128692627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076103210449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031731128692627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076103210449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-30' and  '2022-03-30' and  billing_master.office_id= 1        
 Execution Time:0.0017778873443604

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-30' and  '2022-03-30' and  billing_master.office_id= 1        
 Execution Time:0.0017778873443604

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-30' and '2022-03-30' and  patient_registration.office_id= 1      
 Execution Time:0.0045619010925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099015235900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099015235900879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099015235900879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 719 
 Execution Time:0.00072503089904785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 824 
 Execution Time:0.00047111511230469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 824  and `patient_registration_id` = 719 
 Execution Time:0.00053715705871582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 719 
 Execution Time:0.0014331340789795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095915794372559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095915794372559

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099802017211914

select * from examination where examination_id= '746' and   office_id= '1' 
 Execution Time:0.00094318389892578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 746 
 Execution Time:0.0011260509490967

select * from examination_chargesdetails where  examination_id= '746' 
 Execution Time:0.0004730224609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056910514831543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056910514831543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069904327392578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069904327392578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014331340789795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014331340789795

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050783157348633

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050783157348633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046205520629883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011541843414307

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011541843414307

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016438961029053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082278251647949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082278251647949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023949146270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082278251647949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023949146270752

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004723072052002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004723072052002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004723072052002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004723072052002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-30' and  '2022-03-30' and  billing_master.office_id= 1        
 Execution Time:0.00092911720275879

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-30' and  '2022-03-30' and  billing_master.office_id= 1        
 Execution Time:0.00092911720275879

select modeofpay.name as modename,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join modeofpay on patient_appointment.modeofpay_id=modeofpay.modeofpay_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-03-30' and '2022-03-30' and  patient_registration.office_id= 1      
 Execution Time:0.0036940574645996

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='73' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0019431114196777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028970241546631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028970241546631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028970241546631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023009777069092

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032041072845459

select count(*) as cnt from patient_registration where  patient_registration_id= '685' and  office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_registration where  patient_registration_id= '685' and  office_id= '1' 
 Execution Time:0.00049400329589844

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=685  
 Execution Time:0.0024750232696533

select count(*) as cnt from patient_registration where  patient_registration_id= '685' and  office_id= '1' 
 Execution Time:0.00049400329589844

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=685  
 Execution Time:0.0024750232696533

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=685  
 Execution Time:0.00060200691223145

select count(*) as cnt from patient_registration where  patient_registration_id= '685' and  office_id= '1' 
 Execution Time:0.00049400329589844

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=685  
 Execution Time:0.0024750232696533

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=685  
 Execution Time:0.00060200691223145

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='685' and  office_id= '1' 
 Execution Time:0.00026488304138184

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058507919311523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058507919311523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from patient_appointment where  patient_registration_id = 685 and appointment_date= '2022-03-30' 
 Execution Time:0.00056910514831543

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0010690689086914

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0010690689086914

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069189071655273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069189071655273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 685 
 Execution Time:0.0011630058288574

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 825 
 Execution Time:0.00018095970153809

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 825  and `patient_registration_id` = 685 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012390613555908

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012390613555908

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00049614906311035

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068402290344238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068402290344238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040817260742188

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00068807601928711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00068807601928711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081992149353027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081992149353027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020179748535156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020179748535156

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072121620178223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072121620178223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072121620178223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072121620178223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 720 
 Execution Time:0.00054597854614258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 826 
 Execution Time:0.00034284591674805

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 826  and `patient_registration_id` = 720 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 720 
 Execution Time:0.00028514862060547

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 826 
 Execution Time:0.00019097328186035

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 826  and `patient_registration_id` = 720 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 720 
 Execution Time:0.00047183036804199

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 826 
 Execution Time:0.00033402442932129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 826  and `patient_registration_id` = 720 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085997581481934

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085997581481934

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032210350036621

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00063300132751465

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077486038208008

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077486038208008

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 721 
 Execution Time:0.00042510032653809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 827 
 Execution Time:0.0003049373626709

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 827  and `patient_registration_id` = 721 
 Execution Time:0.00020885467529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066590309143066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066590309143066

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042891502380371

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00054097175598145

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00054097175598145

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0021529197692871

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 720 
 Execution Time:0.0026149749755859

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 826 
 Execution Time:0.00031805038452148

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 826  and `patient_registration_id` = 720 
 Execution Time:0.00076198577880859

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 720 
 Execution Time:0.0011250972747803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select * from examination where examination_id= '748' and   office_id= '1' 
 Execution Time:0.00087499618530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 748 
 Execution Time:0.00075006484985352

select * from examination_chargesdetails where  examination_id= '748' 
 Execution Time:0.00049901008605957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090384483337402

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090384483337402

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043106079101562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017781257629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017781257629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017781257629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029010772705078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017781257629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029010772705078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017781257629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029010772705078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017781257629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029010772705078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017781257629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029010772705078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017781257629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029010772705078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017361640930176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028750896453857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017781257629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029010772705078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017361640930176

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 720 
 Execution Time:0.00067710876464844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 826 
 Execution Time:0.00057792663574219

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 826  and `patient_registration_id` = 720 
 Execution Time:0.00033402442932129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 720 
 Execution Time:0.0033149719238281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select * from examination where examination_id= '748' and   office_id= '1' 
 Execution Time:0.00094294548034668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 748 
 Execution Time:0.00025105476379395

select * from examination_chargesdetails where  examination_id= '748' 
 Execution Time:0.00025010108947754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005340576171875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005340576171875

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045084953308105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042891502380371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042891502380371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033211708068848

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013320446014404

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 722 
 Execution Time:0.00028300285339355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 828 
 Execution Time:0.00020694732666016

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 828  and `patient_registration_id` = 722 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033307075500488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033307075500488

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020098686218262

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00031399726867676

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0028491020202637

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00031399726867676

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0028491020202637

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=545  
 Execution Time:0.00076007843017578

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00031399726867676

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0028491020202637

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=545  
 Execution Time:0.00076007843017578

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='545' and  office_id= '1' 
 Execution Time:0.000244140625

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051999092102051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028014183044434

select count(*) as cnt from patient_appointment where  patient_registration_id = 545 and appointment_date= '2022-03-30' 
 Execution Time:0.00068402290344238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 721 
 Execution Time:0.00035715103149414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 827 
 Execution Time:0.00030994415283203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 827  and `patient_registration_id` = 721 
 Execution Time:0.00023484230041504

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 721 
 Execution Time:0.0016379356384277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069189071655273

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069189071655273

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026202201843262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001349925994873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001349925994873

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009760856628418

select * from examination where examination_id= '749' and   office_id= '1' 
 Execution Time:0.0010969638824463

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 749 
 Execution Time:0.0003669261932373

select * from examination_chargesdetails where  examination_id= '749' 
 Execution Time:0.00029802322387695

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071096420288086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 723 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 829 
 Execution Time:0.00017714500427246

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 829  and `patient_registration_id` = 723 
 Execution Time:0.00014805793762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select count(*) as cnt from patient_registration where  patient_registration_id= '721' and  office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from patient_registration where  patient_registration_id= '721' and  office_id= '1' 
 Execution Time:0.00047802925109863

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=721  
 Execution Time:0.0036609172821045

select count(*) as cnt from patient_registration where  patient_registration_id= '721' and  office_id= '1' 
 Execution Time:0.00047802925109863

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=721  
 Execution Time:0.0036609172821045

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=721  
 Execution Time:0.00077390670776367

select count(*) as cnt from patient_registration where  patient_registration_id= '721' and  office_id= '1' 
 Execution Time:0.00047802925109863

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=721  
 Execution Time:0.0036609172821045

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=721  
 Execution Time:0.00077390670776367

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='721' and  office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014119148254395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014119148254395

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 545 
 Execution Time:0.0002899169921875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 830 
 Execution Time:0.00025391578674316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 830  and `patient_registration_id` = 545 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041413307189941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041413307189941

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042080879211426

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 722 
 Execution Time:0.00034189224243164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 828 
 Execution Time:0.00031900405883789

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 828  and `patient_registration_id` = 722 
 Execution Time:0.00021600723266602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 722 
 Execution Time:0.0015730857849121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053191184997559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053191184997559

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select * from examination where examination_id= '750' and   office_id= '1' 
 Execution Time:0.00061893463134766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 750 
 Execution Time:0.00034499168395996

select * from examination_chargesdetails where  examination_id= '750' 
 Execution Time:0.00031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056600570678711

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054693222045898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 723 
 Execution Time:0.00023508071899414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 829 
 Execution Time:0.00016903877258301

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 829  and `patient_registration_id` = 723 
 Execution Time:0.00012588500976562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 723 
 Execution Time:0.0010039806365967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032877922058105

select * from examination where examination_id= '751' and   office_id= '1' 
 Execution Time:0.00071907043457031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 751 
 Execution Time:0.0001828670501709

select * from examination_chargesdetails where  examination_id= '751' 
 Execution Time:0.0001518726348877

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00074410438537598

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063085556030273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 545 
 Execution Time:0.00066304206848145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 830 
 Execution Time:0.0003199577331543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 830  and `patient_registration_id` = 545 
 Execution Time:0.00025296211242676

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 545 
 Execution Time:0.0012199878692627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select * from examination where examination_id= '752' and   office_id= '1' 
 Execution Time:0.0037190914154053

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011429786682129

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 752 
 Execution Time:0.0010969638824463

select * from examination_chargesdetails where  examination_id= '752' 
 Execution Time:0.0020251274108887

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089097023010254

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089097023010254

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018229484558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018229484558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018229484558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071597099304199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032615661621094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071811676025391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071811676025391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012121200561523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 685 
 Execution Time:0.000244140625

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 825 
 Execution Time:0.00016999244689941

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 825  and `patient_registration_id` = 685 
 Execution Time:0.00017094612121582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 685 
 Execution Time:0.0010330677032471

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select * from examination where examination_id= '747' and   office_id= '1' 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 747 
 Execution Time:0.0005040168762207

select * from examination_chargesdetails where  examination_id= '747' 
 Execution Time:0.00025200843811035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027585029602051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073909759521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018351078033447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073909759521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018351078033447

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.00031685829162598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 831 
 Execution Time:0.0002439022064209

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 831  and `patient_registration_id` = 724 
 Execution Time:0.00056791305541992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006101131439209

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006101131439209

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024795532226562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.00057601928710938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 831 
 Execution Time:0.00040578842163086

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 831  and `patient_registration_id` = 724 
 Execution Time:0.00053286552429199

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 724 
 Execution Time:0.0017099380493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000885009765625

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000885009765625

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select * from examination where examination_id= '753' and   office_id= '1' 
 Execution Time:0.0010349750518799

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 753 
 Execution Time:0.00052809715270996

select * from examination_chargesdetails where  examination_id= '753' 
 Execution Time:0.00034093856811523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052118301391602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052118301391602

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007319450378418

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061416625976562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017318725585938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017318725585938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024361610412598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017318725585938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024361610412598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017318725585938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024361610412598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00017786026000977

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.0015799999237061

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024929046630859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024929046630859

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005030632019043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.00025391578674316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.00021600723266602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.00026607513427734

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 202 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select * from examination where examination_id= '99' and   office_id= '1' 
 Execution Time:0.00087809562683105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 99 
 Execution Time:0.002608060836792

select * from examination_chargesdetails where  examination_id= '99' 
 Execution Time:0.0011718273162842

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001680850982666

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001680850982666

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020170211791992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0058910846710205

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0058910846710205

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0095229148864746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024919509887695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0058910846710205

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0095229148864746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024919509887695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.003558874130249

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0058910846710205

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0095229148864746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024919509887695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.003558874130249

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00074219703674316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.0029020309448242

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.003183126449585

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00049304962158203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00073099136352539

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057888031005859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057888031005859

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00071191787719727

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00041103363037109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00031280517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087904930114746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087904930114746

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042915344238281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.00044012069702148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.001039981842041

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.00045204162597656

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 202 
 Execution Time:0.00078201293945312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select * from examination where examination_id= '99' and   office_id= '1' 
 Execution Time:0.00081920623779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 99 
 Execution Time:0.0013549327850342

select * from examination_chargesdetails where  examination_id= '99' 
 Execution Time:0.0010361671447754

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015358924865723

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015358924865723

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.000762939453125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00039100646972656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00030112266540527

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069379806518555

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069379806518555

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069689750671387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.0005650520324707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.00038313865661621

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.00050997734069824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 202 
 Execution Time:0.001039981842041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020501613616943

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020501613616943

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select * from examination where examination_id= '99' and   office_id= '1' 
 Execution Time:0.00072503089904785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 99 
 Execution Time:0.00063800811767578

select * from examination_chargesdetails where  examination_id= '99' 
 Execution Time:0.00027894973754883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069403648376465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069403648376465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045013427734375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.0002140998840332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.00015497207641602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.00013613700866699

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 202 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072908401489258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072908401489258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select * from examination where examination_id= '99' and   office_id= '1' 
 Execution Time:0.001121997833252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 99 
 Execution Time:0.00046801567077637

select * from examination_chargesdetails where  examination_id= '99' 
 Execution Time:0.00032496452331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088310241699219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088310241699219

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select * from office where  office_id= '1' 
 Execution Time:0.00056314468383789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 202 
 Execution Time:0.0010218620300293

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 272 
 Execution Time:0.00033378601074219

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 272  and `patient_registration_id` = 202 
 Execution Time:0.00046396255493164

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 202 
 Execution Time:0.0021381378173828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select * from examination where examination_id= '99' and   office_id= '1' 
 Execution Time:0.001201868057251

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 99 
 Execution Time:0.00052881240844727

select * from examination_chargesdetails where  examination_id= '99' 
 Execution Time:0.00095081329345703

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001244068145752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001244068145752

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055694580078125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055694580078125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051403045654297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00060296058654785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00053596496582031

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00069379806518555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004727840423584

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004727840423584

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058507919311523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00089597702026367

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00070285797119141

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00051689147949219

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00038790702819824

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00020313262939453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010349750518799

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00044608116149902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00041913986206055

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00065112113952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011279582977295

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011279582977295

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033998489379883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00051307678222656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00057888031005859

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070285797119141

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070285797119141

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00313401222229

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00313401222229

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.0027339458465576

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.0022859573364258

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.004478931427002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014259815216064

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014259815216064

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005791187286377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00079607963562012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00061511993408203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.0007321834564209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.0006871223449707

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00053501129150391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079607963562012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079607963562012

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055503845214844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.0017788410186768

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00069999694824219

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00074601173400879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053286552429199

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053286552429199

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064396858215332


select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031452178955078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031452178955078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031452178955078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031452178955078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031452178955078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023660659790039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031452178955078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023660659790039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023682117462158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031452178955078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023660659790039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023682117462158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031452178955078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023660659790039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023682117462158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029439926147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031452178955078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023660659790039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023682117462158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029439926147461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031452178955078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023660659790039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023682117462158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029439926147461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024850368499756

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066995620727539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066995620727539

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019659996032715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005040168762207

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00018501281738281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014119148254395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014119148254395

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034852027893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034852027893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029981136322021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034852027893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029981136322021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030901432037354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034852027893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029981136322021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030901432037354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035490989685059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034852027893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029981136322021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030901432037354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035490989685059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031740665435791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034852027893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029981136322021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030901432037354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035490989685059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031740665435791

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034852027893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029981136322021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030901432037354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035490989685059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031740665435791

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038719177246094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034811496734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034852027893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029981136322021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030901432037354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035490989685059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031740665435791

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038719177246094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022258758544922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022931098937988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002622127532959

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019209384918213

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002622127532959

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019209384918213

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023491382598877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002622127532959

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019209384918213

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023491382598877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 265 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 284 
 Execution Time:0.00016593933105469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 284  and `patient_registration_id` = 265 
 Execution Time:0.0017659664154053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 265 
 Execution Time:0.00027084350585938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 284 
 Execution Time:0.00016403198242188

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 284  and `patient_registration_id` = 265 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027759075164795

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027759075164795

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049591064453125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069093704223633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069093704223633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007011890411377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007011890411377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007011890411377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047588348388672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047588348388672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050592422485352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025415420532227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 266 
 Execution Time:0.00021505355834961

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 285 
 Execution Time:0.00016093254089355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 285  and `patient_registration_id` = 266 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058984756469727

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058984756469727

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027990341186523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007939338684082

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007939338684082

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006251335144043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006251335144043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033102035522461

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033102035522461

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036630630493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021109580993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021109580993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021109580993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 267 
 Execution Time:0.00048112869262695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 286 
 Execution Time:0.00028705596923828

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 286  and `patient_registration_id` = 267 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025599002838135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025599002838135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025599002838135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098204612731934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098204612731934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098204612731934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022978782653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022978782653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010781288146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022978782653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010781288146973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022978782653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010781288146973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001035213470459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022978782653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010781288146973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001035213470459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074410438537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022978782653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010781288146973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001035213470459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074410438537598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022978782653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010781288146973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001035213470459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074410438537598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 268 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 287 
 Execution Time:0.00027704238891602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 287  and `patient_registration_id` = 268 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079917907714844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079917907714844

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 269 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 288 
 Execution Time:0.00020885467529297

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 288  and `patient_registration_id` = 269 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010058879852295

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010058879852295

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010058879852295

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 269 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 288 
 Execution Time:0.00025796890258789

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 288  and `patient_registration_id` = 269 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 269 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 288 
 Execution Time:0.0002899169921875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 288  and `patient_registration_id` = 269 
 Execution Time:0.00042581558227539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018918514251709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018918514251709

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032620429992676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 268 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 287 
 Execution Time:0.00020980834960938

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 287  and `patient_registration_id` = 268 
 Execution Time:0.00017213821411133

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 268 
 Execution Time:0.00067996978759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081610679626465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081610679626465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select * from examination where examination_id= '249' and   office_id= '1' 
 Execution Time:0.001262903213501

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 249 
 Execution Time:0.0079140663146973

select * from examination_chargesdetails where  examination_id= '249' 
 Execution Time:0.004831075668335

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024120807647705

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024120807647705

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='40' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0026488304138184

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005650520324707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007011890411377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066995620727539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066995620727539

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036120414733887

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 265 
 Execution Time:0.00034308433532715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 284 
 Execution Time:0.00021100044250488

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 284  and `patient_registration_id` = 265 
 Execution Time:0.00020503997802734

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 265 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055885314941406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055885314941406

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051307678222656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093507766723633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093507766723633

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029749870300293

select * from examination where examination_id= '246' and   office_id= '1' 
 Execution Time:0.00068306922912598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 246 
 Execution Time:0.00027608871459961

select * from examination_chargesdetails where  examination_id= '246' 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081491470336914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081491470336914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081491470336914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010271072387695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004878044128418

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004878044128418

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0001671314239502

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050520896911621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050520896911621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002899169921875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050520896911621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014879703521729

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014879703521729

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014879703521729

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 270 
 Execution Time:0.0012691020965576

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 289 
 Execution Time:0.00052189826965332

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 289  and `patient_registration_id` = 270 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 270 
 Execution Time:0.00070309638977051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 289 
 Execution Time:0.0002598762512207

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 289  and `patient_registration_id` = 270 
 Execution Time:0.00028777122497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082206726074219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082206726074219

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046110153198242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 269 
 Execution Time:0.0010080337524414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 288 
 Execution Time:0.0003058910369873

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 288  and `patient_registration_id` = 269 
 Execution Time:0.0005030632019043

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 269 
 Execution Time:0.001021146774292

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009911060333252

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009911060333252

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037693977355957

select * from examination where examination_id= '250' and   office_id= '1' 
 Execution Time:0.00076389312744141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 250 
 Execution Time:0.00042295455932617

select * from examination_chargesdetails where  examination_id= '250' 
 Execution Time:0.0002591609954834

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0071721076965332

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0092411041259766

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072002410888672

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0037350654602051

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='63' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0022220611572266

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010440349578857

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 266 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 285 
 Execution Time:0.00024890899658203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 285  and `patient_registration_id` = 266 
 Execution Time:0.00033402442932129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 266 
 Execution Time:0.0007319450378418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058221817016602

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058221817016602

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042891502380371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0053601264953613

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0053601264953613

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from examination where examination_id= '247' and   office_id= '1' 
 Execution Time:0.0010440349578857

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 247 
 Execution Time:0.00069499015808105

select * from examination_chargesdetails where  examination_id= '247' 
 Execution Time:0.00043296813964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 267 
 Execution Time:0.0008690357208252

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 286 
 Execution Time:0.00047802925109863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 286  and `patient_registration_id` = 267 
 Execution Time:0.0005950927734375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 267 
 Execution Time:0.001147985458374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select * from examination where examination_id= '248' and   office_id= '1' 
 Execution Time:0.0010089874267578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095415115356445

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 248 
 Execution Time:0.0004889965057373

select * from examination_chargesdetails where  examination_id= '248' 
 Execution Time:0.00038909912109375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027084350585938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027084350585938

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020384788513184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028681755065918

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007171630859375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00087308883666992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00087308883666992

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040483474731445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023460388183594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023460388183594

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023460388183594

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 271 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 290 
 Execution Time:0.00019693374633789

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 290  and `patient_registration_id` = 271 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 271 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 290 
 Execution Time:0.00029301643371582

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 290  and `patient_registration_id` = 271 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013570785522461

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013570785522461

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027270317077637

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0082390308380127

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0082390308380127

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0025842189788818

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010950565338135

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010950565338135

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0030322074890137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011248588562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011248588562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011248588562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011248588562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015571117401123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011248588562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015571117401123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011248588562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015571117401123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011248588562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015571117401123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013530254364014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011248588562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015571117401123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013530254364014

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070619583129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011248588562012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015571117401123

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013530254364014

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070619583129883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086021423339844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014359951019287

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086021423339844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 272 
 Execution Time:0.00046801567077637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 291 
 Execution Time:0.00045394897460938

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 291  and `patient_registration_id` = 272 
 Execution Time:0.0010919570922852

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0072090625762939

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0072090625762939

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 272 
 Execution Time:0.00074410438537598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 291 
 Execution Time:0.00052499771118164

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 291  and `patient_registration_id` = 272 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017359256744385

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017359256744385

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034339427947998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034339427947998

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034339427947998

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 270 
 Execution Time:0.0028760433197021

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 289 
 Execution Time:0.00048995018005371

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 289  and `patient_registration_id` = 270 
 Execution Time:0.00041294097900391

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 270 
 Execution Time:0.0010881423950195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0077319145202637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0077319145202637

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0064148902893066

select * from examination where examination_id= '251' and   office_id= '1' 
 Execution Time:0.0078649520874023

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0048160552978516

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 251 
 Execution Time:0.011752843856812

select * from examination_chargesdetails where  examination_id= '251' 
 Execution Time:0.018449068069458

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.019745111465454

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.019745111465454

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.003925085067749

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 270 
 Execution Time:0.00028109550476074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 289 
 Execution Time:0.00024890899658203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 289  and `patient_registration_id` = 270 
 Execution Time:0.00030398368835449

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 270 
 Execution Time:0.00066494941711426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011627674102783

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011627674102783

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053310394287109

select * from examination where examination_id= '251' and   office_id= '1' 
 Execution Time:0.0011918544769287

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025649070739746

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 251 
 Execution Time:0.0015280246734619

select * from examination_chargesdetails where  examination_id= '251' 
 Execution Time:0.00045084953308105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068998336791992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068998336791992

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039291381835938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00088119506835938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00088119506835938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 272 
 Execution Time:0.0010218620300293

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 291 
 Execution Time:0.00092411041259766

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 291  and `patient_registration_id` = 272 
 Execution Time:0.00068306922912598

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 272 
 Execution Time:0.0018200874328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017240047454834

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017240047454834

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039608478546143

select * from examination where examination_id= '253' and   office_id= '1' 
 Execution Time:0.0016529560089111

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 253 
 Execution Time:0.0026960372924805

select * from examination_chargesdetails where  examination_id= '253' 
 Execution Time:0.00077700614929199

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010499954223633

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010499954223633

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0021860599517822

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0050239562988281

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0050239562988281

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037710666656494

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073885917663574

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073885917663574

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015811920166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015811920166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015811920166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015811920166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018360614776611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015811920166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018360614776611

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015811920166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018360614776611

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010271072387695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 273 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 292 
 Execution Time:0.00019311904907227

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 292  and `patient_registration_id` = 273 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 273 
 Execution Time:0.00039410591125488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 292 
 Execution Time:0.00029397010803223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 292  and `patient_registration_id` = 273 
 Execution Time:0.00038599967956543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 273 
 Execution Time:0.0010969638824463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select * from examination where examination_id= '254' and   office_id= '1' 
 Execution Time:0.001093864440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 254 
 Execution Time:0.00041484832763672

select * from examination_chargesdetails where  examination_id= '254' 
 Execution Time:0.00041794776916504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056600570678711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071001052856445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071001052856445

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029706954956055

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0006401538848877

SELECT *
FROM `examination`
WHERE `examination_id` = 254 
 Execution Time:0.00052213668823242

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00018692016601562

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0003199577331543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 273 
 Execution Time:0.00019693374633789

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00045013427734375

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=254 
 Execution Time:0.00070405006408691

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=254 
 Execution Time:0.00043606758117676

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=254 
 Execution Time:0.00045204162597656

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=254 
 Execution Time:0.00028491020202637

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='254' and office_id='1' 
 Execution Time:0.00064492225646973

select * from examination_chargesdetails where  examination_id= '254' 
 Execution Time:0.00021505355834961

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00053882598876953

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00053882598876953

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00022482872009277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004580020904541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 273 
 Execution Time:0.00029587745666504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 292 
 Execution Time:0.00018596649169922

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 292  and `patient_registration_id` = 273 
 Execution Time:0.00024008750915527

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 273 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053310394287109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053310394287109

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052714347839355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038886070251465

select * from examination where examination_id= '254' and   office_id= '1' 
 Execution Time:0.0012030601501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 254 
 Execution Time:0.00028204917907715

select * from examination_chargesdetails where  examination_id= '254' 
 Execution Time:0.00025415420532227

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00048017501831055

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00018215179443359

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010080337524414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082182884216309

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082182884216309

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033879280090332

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029399394989014

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 275 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 294 
 Execution Time:0.00018501281738281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 294  and `patient_registration_id` = 275 
 Execution Time:0.0001378059387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013279914855957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025701522827148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 274 
 Execution Time:0.0020689964294434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 293 
 Execution Time:0.00028300285339355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 293  and `patient_registration_id` = 274 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026140213012695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026140213012695

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036215782165527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034079551696777

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034079551696777

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032038688659668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034079551696777

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 275 
 Execution Time:0.00071310997009277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 294 
 Execution Time:0.00061297416687012

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 294  and `patient_registration_id` = 275 
 Execution Time:0.00079798698425293

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 275 
 Execution Time:0.0011370182037354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025391578674316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008089542388916

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008089542388916

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028848648071289

select * from examination where examination_id= '255' and   office_id= '1' 
 Execution Time:0.0026388168334961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028860569000244

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 255 
 Execution Time:0.0038700103759766

select * from examination_chargesdetails where  examination_id= '255' 
 Execution Time:0.0021100044250488

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='63' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088000297546387

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057005882263184

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062704086303711

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='40' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015349388122559

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00092291831970215

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 274 
 Execution Time:0.00031805038452148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 293 
 Execution Time:0.0002899169921875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 293  and `patient_registration_id` = 274 
 Execution Time:0.0001990795135498

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 274 
 Execution Time:0.00069594383239746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select * from examination where examination_id= '256' and   office_id= '1' 
 Execution Time:0.00079703330993652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 256 
 Execution Time:0.00039911270141602

select * from examination_chargesdetails where  examination_id= '256' 
 Execution Time:0.00025486946105957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015199184417725

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015199184417725

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00085902214050293

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='20' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078892707824707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00045394897460938

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='92' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 275 
 Execution Time:0.00066113471984863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 294 
 Execution Time:0.0004429817199707

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 294  and `patient_registration_id` = 275 
 Execution Time:0.00053906440734863

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 275 
 Execution Time:0.00089907646179199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select * from examination where examination_id= '255' and   office_id= '1' 
 Execution Time:0.0013091564178467

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 255 
 Execution Time:0.00054001808166504

select * from examination_chargesdetails where  examination_id= '255' 
 Execution Time:0.00072693824768066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080013275146484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080013275146484

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006711483001709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006711483001709

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011320114135742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011320114135742

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011320114135742

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011320114135742

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014431476593018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011320114135742

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014431476593018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011320114135742

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014431476593018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010969638824463

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003788948059082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003788948059082

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039370059967041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024261474609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024261474609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055751800537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024261474609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055751800537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024261474609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055751800537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024261474609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055751800537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019080638885498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024261474609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055751800537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019080638885498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015528202056885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024261474609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055751800537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019080638885498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015528202056885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013458728790283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024261474609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055751800537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019080638885498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015528202056885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013458728790283

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003878116607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024261474609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055751800537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019080638885498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015528202056885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013458728790283

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003878116607666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024261474609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055751800537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019080638885498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015528202056885

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013458728790283

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003878116607666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 276 
 Execution Time:0.00026702880859375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 295 
 Execution Time:0.00035691261291504

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 295  and `patient_registration_id` = 276 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063776969909668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063776969909668

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 276 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 295 
 Execution Time:0.00028514862060547

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 295  and `patient_registration_id` = 276 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011069774627686

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011069774627686

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 276 
 Execution Time:0.0004580020904541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 295 
 Execution Time:0.0003349781036377

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 295  and `patient_registration_id` = 276 
 Execution Time:0.00038504600524902

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 276 
 Execution Time:0.00083589553833008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select * from examination where examination_id= '257' and   office_id= '1' 
 Execution Time:0.0010631084442139

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 257 
 Execution Time:0.0012350082397461

select * from examination_chargesdetails where  examination_id= '257' 
 Execution Time:0.001072883605957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00130295753479

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00130295753479

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069022178649902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069022178649902

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035381317138672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 271 
 Execution Time:0.00042390823364258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 290 
 Execution Time:0.00064516067504883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 290  and `patient_registration_id` = 271 
 Execution Time:0.00053596496582031

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 271 
 Execution Time:0.00079703330993652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select * from examination where examination_id= '252' and   office_id= '1' 
 Execution Time:0.00097894668579102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 252 
 Execution Time:0.00033307075500488

select * from examination_chargesdetails where  examination_id= '252' 
 Execution Time:0.00047206878662109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036869049072266

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036869049072266

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020618438720703

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062012672424316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062012672424316

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062680244445801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062680244445801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062680244445801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062680244445801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093388557434082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062680244445801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093388557434082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062680244445801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093388557434082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043487548828125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087690353393555

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087690353393555

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068039894104004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068039894104004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068039894104004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068039894104004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038220882415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068039894104004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038220882415771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068039894104004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038220882415771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016708374023438

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016708374023438

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016708374023438

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 277 
 Execution Time:0.00057888031005859

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 296 
 Execution Time:0.00075507164001465

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 296  and `patient_registration_id` = 277 
 Execution Time:0.0012359619140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 277 
 Execution Time:0.00091409683227539

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 296 
 Execution Time:0.00031495094299316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 296  and `patient_registration_id` = 277 
 Execution Time:0.00045609474182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020670890808105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020670890808105

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 277 
 Execution Time:0.00028514862060547

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 296 
 Execution Time:0.000244140625

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 296  and `patient_registration_id` = 277 
 Execution Time:0.00045084953308105

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 277 
 Execution Time:0.00071096420288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035715103149414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015499591827393

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015499591827393

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048708915710449

select * from examination where examination_id= '258' and   office_id= '1' 
 Execution Time:0.00093317031860352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 258 
 Execution Time:0.001168966293335

select * from examination_chargesdetails where  examination_id= '258' 
 Execution Time:0.0010957717895508

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0022029876708984

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='14' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.004127025604248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026800632476807

select count(*) as cnt from patient_registration where  patient_registration_id= '277' and  office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from patient_registration where  patient_registration_id= '277' and  office_id= '1' 
 Execution Time:0.00026893615722656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='277' and  doctors_registration.office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from patient_registration where  patient_registration_id= '277' and  office_id= '1' 
 Execution Time:0.00026893615722656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='277' and  doctors_registration.office_id= '1' 
 Execution Time:0.00058913230895996

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='277' and  office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037028789520264

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037028789520264

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033187866210938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019407272338867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005791187286377

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010838508605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010838508605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010838508605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010838508605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010838508605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010838508605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010838508605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010838508605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007011890411377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010838508605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007011890411377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010838508605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042486190795898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007011890411377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00046896934509277

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00016212463378906

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001410961151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001410961151123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.0005640983581543

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.0005640983581543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='244' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015599727630615

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.0005640983581543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='244' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015599727630615

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='244' and  office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080204010009766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080204010009766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026583671569824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053787231445312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053787231445312

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040292739868164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040292739868164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00052189826965332

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00052189826965332

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023708343505859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023708343505859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078606605529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067687034606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067687034606934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067687034606934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 278 
 Execution Time:0.00028085708618164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 297 
 Execution Time:0.00017905235290527

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 297  and `patient_registration_id` = 278 
 Execution Time:0.0004570484161377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010731220245361

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010731220245361

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.00034880638122559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 299 
 Execution Time:0.0017218589782715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 299  and `patient_registration_id` = 244 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017998218536377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017998218536377

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036699771881104

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057601928710938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020003318786621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036787986755371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001187801361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001187801361084

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033690929412842

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081777572631836

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081777572631836

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002011775970459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002011775970459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013861656188965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022380352020264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002011775970459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013861656188965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 279 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 298 
 Execution Time:0.00030207633972168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 298  and `patient_registration_id` = 279 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075984001159668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075984001159668

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 280 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 300 
 Execution Time:0.00032496452331543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 300  and `patient_registration_id` = 280 
 Execution Time:0.00029087066650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027918815612793

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017099380493164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017099380493164

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011270046234131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092697143554688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092697143554688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011661052703857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051212310791016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092697143554688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011661052703857

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00053000450134277

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00053000450134277

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033028125762939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033028125762939

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033028125762939

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033028125762939

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033028125762939

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033028125762939

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010218620300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033028125762939

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010218620300293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0033028125762939

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010218620300293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 283 
 Execution Time:0.00021696090698242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 303 
 Execution Time:0.00018119812011719

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 303  and `patient_registration_id` = 283 
 Execution Time:0.0002129077911377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057220458984375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057220458984375

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 283 
 Execution Time:0.00041389465332031

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 303 
 Execution Time:0.00026297569274902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 303  and `patient_registration_id` = 283 
 Execution Time:0.00050997734069824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 283 
 Execution Time:0.00097990036010742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select * from examination where examination_id= '263' and   office_id= '1' 
 Execution Time:0.00098299980163574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 263 
 Execution Time:0.001068115234375

select * from examination_chargesdetails where  examination_id= '263' 
 Execution Time:0.0008690357208252

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023379325866699

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023379325866699

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069403648376465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069403648376465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='14' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013821125030518

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0021228790283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 281 
 Execution Time:0.00020289421081543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 301 
 Execution Time:0.0001518726348877

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 301  and `patient_registration_id` = 281 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013201236724854

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013201236724854

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028610229492188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033271312713623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033271312713623

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033271312713623

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select count(*) as cnt from patient_registration where  patient_registration_id= '283' and  office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from patient_registration where  patient_registration_id= '283' and  office_id= '1' 
 Execution Time:0.00038290023803711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='283' and  doctors_registration.office_id= '1' 
 Execution Time:0.00067281723022461

select count(*) as cnt from patient_registration where  patient_registration_id= '283' and  office_id= '1' 
 Execution Time:0.00038290023803711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='283' and  doctors_registration.office_id= '1' 
 Execution Time:0.00067281723022461

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='283' and  office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053191184997559

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 282 
 Execution Time:0.00024795532226562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 302 
 Execution Time:0.00018000602722168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 302  and `patient_registration_id` = 282 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051307678222656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051307678222656

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 284 
 Execution Time:0.00033283233642578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 304 
 Execution Time:0.0002288818359375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 304  and `patient_registration_id` = 284 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019121170043945

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029206275939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 285 
 Execution Time:0.00030899047851562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 305 
 Execution Time:0.00022602081298828

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 305  and `patient_registration_id` = 285 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041580200195312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041580200195312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005030632019043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005030632019043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012900829315186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012900829315186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012900829315186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012900829315186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012900829315186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 284 
 Execution Time:0.0010929107666016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 304 
 Execution Time:0.00043892860412598

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 304  and `patient_registration_id` = 284 
 Execution Time:0.00050091743469238

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 284 
 Execution Time:0.0010449886322021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select * from examination where examination_id= '266' and   office_id= '1' 
 Execution Time:0.00086688995361328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 266 
 Execution Time:0.00049710273742676

select * from examination_chargesdetails where  examination_id= '266' 
 Execution Time:0.00045585632324219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029587745666504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030779838562012

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='56' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064611434936523

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='94' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00074005126953125

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='91' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059103965759277

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00091099739074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 278 
 Execution Time:0.00034093856811523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 297 
 Execution Time:0.00028514862060547

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 297  and `patient_registration_id` = 278 
 Execution Time:0.00021696090698242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 278 
 Execution Time:0.00078892707824707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054311752319336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054311752319336

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036215782165527

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012619495391846

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012619495391846

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046586990356445

select * from examination where examination_id= '259' and   office_id= '1' 
 Execution Time:0.0038690567016602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040268898010254

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 259 
 Execution Time:0.0036220550537109

select * from examination_chargesdetails where  examination_id= '259' 
 Execution Time:0.0032179355621338

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 280 
 Execution Time:0.00037908554077148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 300 
 Execution Time:0.00030708312988281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 300  and `patient_registration_id` = 280 
 Execution Time:0.00029397010803223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 280 
 Execution Time:0.00092983245849609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select * from examination where examination_id= '262' and   office_id= '1' 
 Execution Time:0.00075697898864746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 262 
 Execution Time:0.00026917457580566

select * from examination_chargesdetails where  examination_id= '262' 
 Execution Time:0.00021004676818848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043010711669922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043010711669922

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00017285346984863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054287910461426

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054287910461426

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00024795532226562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 279 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 298 
 Execution Time:0.00030708312988281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 298  and `patient_registration_id` = 279 
 Execution Time:0.00030708312988281

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 279 
 Execution Time:0.00070810317993164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select * from examination where examination_id= '261' and   office_id= '1' 
 Execution Time:0.00091886520385742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 261 
 Execution Time:0.00029492378234863

select * from examination_chargesdetails where  examination_id= '261' 
 Execution Time:0.00025796890258789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087690353393555

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087690353393555

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071811676025391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071811676025391

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041913986206055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.0001981258392334

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 299 
 Execution Time:0.00019192695617676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 299  and `patient_registration_id` = 244 
 Execution Time:0.00012493133544922

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 244 
 Execution Time:0.00056910514831543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055408477783203

select * from examination where examination_id= '260' and   office_id= '1' 
 Execution Time:0.00081896781921387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 260 
 Execution Time:0.0004580020904541

select * from examination_chargesdetails where  examination_id= '260' 
 Execution Time:0.0010719299316406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 285 
 Execution Time:0.0003211498260498

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 305 
 Execution Time:0.00025606155395508

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 305  and `patient_registration_id` = 285 
 Execution Time:0.00020194053649902

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 285 
 Execution Time:0.00079917907714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select * from examination where examination_id= '267' and   office_id= '1' 
 Execution Time:0.00072002410888672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 267 
 Execution Time:0.00018501281738281

select * from examination_chargesdetails where  examination_id= '267' 
 Execution Time:0.00018095970153809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047707557678223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047707557678223

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034618377685547

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066208839416504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066208839416504

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 282 
 Execution Time:0.00041604042053223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 302 
 Execution Time:0.0003359317779541

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 302  and `patient_registration_id` = 282 
 Execution Time:0.00046300888061523

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 282 
 Execution Time:0.0010130405426025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select * from examination where examination_id= '265' and   office_id= '1' 
 Execution Time:0.00084686279296875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 265 
 Execution Time:0.00014519691467285

select * from examination_chargesdetails where  examination_id= '265' 
 Execution Time:0.00024509429931641

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063180923461914

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063180923461914

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023293495178223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073814392089844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073814392089844

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049710273742676

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='67' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068497657775879

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055384635925293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.00021505355834961

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 299 
 Execution Time:0.0001528263092041

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 299  and `patient_registration_id` = 244 
 Execution Time:0.00045585632324219

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 244 
 Execution Time:0.0005488395690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011248588562012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011248588562012

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037717819213867

select * from examination where examination_id= '260' and   office_id= '1' 
 Execution Time:0.0010280609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 260 
 Execution Time:0.00062298774719238

select * from examination_chargesdetails where  examination_id= '260' 
 Execution Time:0.00051498413085938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083708763122559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083708763122559

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040411949157715

SELECT *
FROM `examination`
WHERE `examination_id` = 260 
 Execution Time:0.0012879371643066

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0004889965057373

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00042390823364258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.0004429817199707

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.00057005882263184

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=260 
 Execution Time:0.0010209083557129

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=260 
 Execution Time:0.00062704086303711

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=260 
 Execution Time:0.00060415267944336

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=260 
 Execution Time:0.00047397613525391

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='260' and office_id='1' 
 Execution Time:0.00089001655578613

select * from examination_chargesdetails where  examination_id= '260' 
 Execution Time:0.00032496452331543

SELECT *
FROM `examination`
WHERE `examination_id` = 222 
 Execution Time:0.00067710876464844

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0002291202545166

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00027608871459961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.00016307830810547

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.000244140625

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=222 
 Execution Time:0.00081801414489746

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=222 
 Execution Time:0.00066804885864258

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=222 
 Execution Time:0.0005030632019043

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=222 
 Execution Time:0.00038003921508789

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='222' and office_id='1' 
 Execution Time:0.00055193901062012

select * from examination_chargesdetails where  examination_id= '222' 
 Execution Time:0.00020813941955566

SELECT *
FROM `examination`
WHERE `examination_id` = 222 
 Execution Time:0.00067710876464844

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0002291202545166

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00027608871459961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.00016307830810547

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.000244140625

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=222 
 Execution Time:0.00081801414489746

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=222 
 Execution Time:0.00066804885864258

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=222 
 Execution Time:0.0005030632019043

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=222 
 Execution Time:0.00038003921508789

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='222' and office_id='1' 
 Execution Time:0.00055193901062012

select * from examination_chargesdetails where  examination_id= '222' 
 Execution Time:0.00020813941955566

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081491470336914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081491470336914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081491470336914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081491470336914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081491470336914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00043702125549316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00043702125549316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00070905685424805

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034213066101074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034213066101074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073814392089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073814392089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073814392089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014522075653076

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014522075653076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014522075653076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014522075653076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014522075653076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00015020370483398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00015020370483398

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00015020370483398

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016400814056396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016400814056396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016400814056396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016400814056396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016400814056396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013740062713623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016400814056396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013740062713623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016400814056396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013740062713623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016400814056396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013740062713623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014030933380127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016400814056396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013740062713623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014030933380127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016400814056396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013740062713623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014030933380127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064587593078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064587593078613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064587593078613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063586235046387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063586235046387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093412399291992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093412399291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093412399291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093412399291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093412399291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001680850982666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001680850982666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001680850982666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001680850982666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001680850982666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081491470336914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081491470336914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081491470336914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from patient_registration where  patient_registration_id= '265' and  office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_registration where  patient_registration_id= '265' and  office_id= '1' 
 Execution Time:0.00046300888061523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='265' and  doctors_registration.office_id= '1' 
 Execution Time:0.0007319450378418

select count(*) as cnt from patient_registration where  patient_registration_id= '265' and  office_id= '1' 
 Execution Time:0.00046300888061523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='265' and  doctors_registration.office_id= '1' 
 Execution Time:0.0007319450378418

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='265' and  office_id= '1' 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select count(*) as cnt from patient_registration where  patient_registration_id= '265' and  office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_registration where  patient_registration_id= '265' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='265' and  doctors_registration.office_id= '1' 
 Execution Time:0.00081801414489746

select count(*) as cnt from patient_registration where  patient_registration_id= '265' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='265' and  doctors_registration.office_id= '1' 
 Execution Time:0.00081801414489746

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='265' and  office_id= '1' 
 Execution Time:0.00029087066650391

select count(*) as cnt from patient_registration where  patient_registration_id= '265' and  office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_registration where  patient_registration_id= '265' and  office_id= '1' 
 Execution Time:0.00040102005004883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='265' and  doctors_registration.office_id= '1' 
 Execution Time:0.00064206123352051

select count(*) as cnt from patient_registration where  patient_registration_id= '265' and  office_id= '1' 
 Execution Time:0.00040102005004883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='265' and  doctors_registration.office_id= '1' 
 Execution Time:0.00064206123352051

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='265' and  office_id= '1' 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092601776123047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081515312194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092601776123047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081515312194824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select count(*) as cnt from patient_registration where  patient_registration_id= '267' and  office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from patient_registration where  patient_registration_id= '267' and  office_id= '1' 
 Execution Time:0.00034403800964355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='267' and  doctors_registration.office_id= '1' 
 Execution Time:0.00068902969360352

select count(*) as cnt from patient_registration where  patient_registration_id= '267' and  office_id= '1' 
 Execution Time:0.00034403800964355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='267' and  doctors_registration.office_id= '1' 
 Execution Time:0.00068902969360352

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='267' and  office_id= '1' 
 Execution Time:0.00017905235290527

select count(*) as cnt from patient_registration where  patient_registration_id= '267' and  office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_registration where  patient_registration_id= '267' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='267' and  doctors_registration.office_id= '1' 
 Execution Time:0.00076889991760254

select count(*) as cnt from patient_registration where  patient_registration_id= '267' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='267' and  doctors_registration.office_id= '1' 
 Execution Time:0.00076889991760254

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='267' and  office_id= '1' 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011396408081055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011396408081055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012993812561035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011396408081055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012993812561035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011396408081055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012993812561035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011515617370605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011396408081055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012993812561035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011515617370605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011396408081055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012993812561035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011515617370605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036406517028809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011396408081055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012993812561035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011515617370605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036406517028809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00011491775512695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00011491775512695

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.00052285194396973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='269' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084114074707031

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.00052285194396973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='269' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084114074707031

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='269' and  office_id= '1' 
 Execution Time:0.0002598762512207

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.0003819465637207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='269' and  doctors_registration.office_id= '1' 
 Execution Time:0.00059986114501953

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.0003819465637207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='269' and  doctors_registration.office_id= '1' 
 Execution Time:0.00059986114501953

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='269' and  office_id= '1' 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054187774658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054187774658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024828910827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054187774658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024828910827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.016002893447876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054187774658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024828910827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.016002893447876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054187774658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024828910827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.016002893447876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.011511087417603

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054187774658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024828910827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.016002893447876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.011511087417603

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026960372924805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054187774658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024828910827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.016002893447876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.011511087417603

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026319026947021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00070095062255859

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00070095062255859

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011088848114014

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00070095062255859

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011088848114014

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00021481513977051

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060796737670898

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060796737670898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013258457183838

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060796737670898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013258457183838

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0059919357299805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0059919357299805

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046515464782715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0037109851837158

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0037109851837158

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00044393539428711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011069774627686

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00044393539428711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011069774627686

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057888031005859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057888031005859

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003058910369873

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00054717063903809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012288093566895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012288093566895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012288093566895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012288093566895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select count(*) as cnt from billing_master where  billing_master_id= '50' and  office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from billing_master where  billing_master_id= '50' and  office_id= '1' 
 Execution Time:0.00032782554626465

select * from billing_master where  billing_master_id= '50' and  office_id= '1' 
 Execution Time:0.00020313262939453

select count(*) as cnt from billing_master where  billing_master_id= '50' and  office_id= '1' 
 Execution Time:0.00032782554626465

select * from billing_master where  billing_master_id= '50' and  office_id= '1' 
 Execution Time:0.00020313262939453

select * from billing_detail where  billing_master_id= '50' 
 Execution Time:0.00020289421081543

select count(*) as cnt from billing_master where  billing_master_id= '50' and  office_id= '1' 
 Execution Time:0.00032782554626465

select * from billing_master where  billing_master_id= '50' and  office_id= '1' 
 Execution Time:0.00020313262939453

select * from billing_detail where  billing_master_id= '50' 
 Execution Time:0.00020289421081543

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00017309188842773

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00029802322387695

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031869411468506

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031869411468506

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0018970966339111

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00090408325195312

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00090408325195312

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00048995018005371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00093698501586914

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00048995018005371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00093698501586914

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0003361701965332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005037784576416

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005037784576416

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002739429473877

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037717819213867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00030303001403809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048184394836426

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00030303001403809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048184394836426

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00017905235290527

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00029993057250977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00078701972961426

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00029993057250977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00078701972961426

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00053119659423828

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00053119659423828

select * from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00053119659423828

select * from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00030088424682617

select * from billing_detail where  billing_master_id= '51' 
 Execution Time:0.00018215179443359

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00053119659423828

select * from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00030088424682617

select * from billing_detail where  billing_master_id= '51' 
 Execution Time:0.00018215179443359

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00017714500427246

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00030803680419922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048208236694336

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00030803680419922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048208236694336

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00018692016601562

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048017501831055

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00023722648620605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00038599967956543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00038599967956543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00059604644775391

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00016903877258301

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00063514709472656

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00063514709472656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009920597076416

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00063514709472656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009920597076416

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00039100646972656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00054717063903809

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00039100646972656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00054717063903809

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092101097106934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092101097106934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043606758117676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043606758117676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050520896911621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050520896911621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050520896911621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001025915145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select count(*) as cnt from patient_registration where  patient_registration_id= '242' and  office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_registration where  patient_registration_id= '242' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='242' and  doctors_registration.office_id= '1' 
 Execution Time:0.00076508522033691

select count(*) as cnt from patient_registration where  patient_registration_id= '242' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='242' and  doctors_registration.office_id= '1' 
 Execution Time:0.00076508522033691

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='242' and  office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from patient_registration where  patient_registration_id= '242' and  office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '242' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='242' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010101795196533

select count(*) as cnt from patient_registration where  patient_registration_id= '242' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='242' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010101795196533

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='242' and  office_id= '1' 
 Execution Time:0.00030899047851562


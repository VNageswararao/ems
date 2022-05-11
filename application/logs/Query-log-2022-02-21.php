select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.025230884552002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.025230884552002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079569816589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.025230884552002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079569816589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.025230884552002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079569816589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068278312683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.025230884552002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079569816589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068278312683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005856990814209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.025230884552002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079569816589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068278312683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005856990814209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.025230884552002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079569816589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068278312683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005856990814209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.025230884552002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079569816589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068278312683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005856990814209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.025230884552002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079569816589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068278312683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005856990814209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004878044128418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038630962371826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.025230884552002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079569816589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068278312683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005856990814209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027439594268799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004878044128418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038630962371826

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028018951416016

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0013840198516846

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0013840198516846

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058484077453613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058484077453613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059700012207031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059700012207031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059700012207031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068211555480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059700012207031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068211555480957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059700012207031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068211555480957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053596496582031

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011909008026123

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020649433135986

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020649433135986

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020649433135986

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 100 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00018787384033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 100 
 Execution Time:0.00024104118347168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00014901161193848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018370151519775

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00068807601928711

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00068807601928711

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065994262695312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065994262695312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 99 
 Execution Time:0.00047898292541504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 104 
 Execution Time:0.00028681755065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090193748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067782402038574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067782402038574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067782402038574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 100 
 Execution Time:0.00027704238891602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00024795532226562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 100 
 Execution Time:0.0008242130279541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019118785858154

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019118785858154

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003199577331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038189888000488

select * from examination where examination_id= '85' and   office_id= '1' 
 Execution Time:0.00067806243896484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 85 
 Execution Time:0.0027651786804199

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.0023341178894043

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='17' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0029621124267578

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00058102607727051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 101 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 106 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021557807922363

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.0022120475769043

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.0018160343170166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042188167572021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042188167572021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042188167572021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042188167572021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-15' and  '2022-02-15' and  billing_master.office_id= 1        
 Execution Time:0.0010058879852295

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00093317031860352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00093317031860352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0073010921478271

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0073010921478271

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0065560340881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006260871887207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006260871887207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006260871887207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095105171203613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006260871887207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095105171203613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006260871887207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095105171203613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022449493408203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022449493408203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022449493408203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 101 
 Execution Time:0.0019068717956543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 106 
 Execution Time:0.00045013427734375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 101 
 Execution Time:0.0010740756988525

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select * from examination where examination_id= '87' and   office_id= '1' 
 Execution Time:0.0013890266418457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 87 
 Execution Time:0.0015649795532227

select * from examination_chargesdetails where  examination_id= '87' 
 Execution Time:0.00074505805969238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007319450378418

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010020732879639

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010020732879639

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019500255584717

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='40' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013720989227295

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041389465332031

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049209594726562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012800693511963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054812431335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054812431335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054812431335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010750293731689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054812431335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010750293731689

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054812431335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010750293731689

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016088485717773

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030016899108887

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030016899108887

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018095970153809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006110668182373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006110668182373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035669803619385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019598007202148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040810108184814

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040810108184814

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00111985206604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084280967712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084280967712402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084280967712402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 103 
 Execution Time:0.00033116340637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 108 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012409687042236

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012409687042236

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012409687042236

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 103 
 Execution Time:0.0003361701965332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 108 
 Execution Time:0.0019581317901611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046110153198242

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062799453735352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062799453735352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061511993408203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061511993408203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061511993408203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061511993408203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061511993408203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092196464538574

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092196464538574

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010099411010742

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010099411010742

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015690326690674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083494186401367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083494186401367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006561279296875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006561279296875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028014183044434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 102 
 Execution Time:0.00047206878662109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011999607086182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011999607086182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050592422485352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011999607086182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063204765319824

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063204765319824

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 106 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 111 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011160373687744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008275032043457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008275032043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008275032043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008275032043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008275032043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008275032043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008275032043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008275032043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008275032043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032782554626465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 102 
 Execution Time:0.00062894821166992

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.0013179779052734

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 102 
 Execution Time:0.0012271404266357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select * from examination where examination_id= '89' and   office_id= '1' 
 Execution Time:0.00060009956359863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 89 
 Execution Time:0.0040738582611084

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.010653972625732

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021529197692871

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021529197692871

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027680397033691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0019841194152832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 103 
 Execution Time:0.00061202049255371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 108 
 Execution Time:0.00039505958557129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 103 
 Execution Time:0.00088286399841309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090694427490234

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.00082707405090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00073504447937012

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00049400329589844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071406364440918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071406364440918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='67' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010459423065186

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084304809570312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 103 
 Execution Time:0.0022480487823486

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 108 
 Execution Time:0.00078511238098145

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 103 
 Execution Time:0.0008549690246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020761489868164

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.0061118602752686

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013251304626465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00061511993408203

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.0038011074066162

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031628608703613

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031628608703613

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037229061126709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 103 
 Execution Time:0.00032615661621094

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 108 
 Execution Time:0.00038313865661621

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 103 
 Execution Time:0.00082087516784668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.00089502334594727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00030303001403809

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00025486946105957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053811073303223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053811073303223

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='67' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068306922912598

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063180923461914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011930465698242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 106 
 Execution Time:0.00043606758117676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 111 
 Execution Time:0.0003349781036377

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 106 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select * from examination where examination_id= '90' and   office_id= '1' 
 Execution Time:0.00089502334594727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 90 
 Execution Time:0.00029706954956055

select * from examination_chargesdetails where  examination_id= '90' 
 Execution Time:0.00025796890258789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046110153198242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046110153198242

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065779685974121

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001507043838501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040719509124756

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.060794115066528

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0044500827789307

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0044500827789307

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select count(*) as cnt from medicine where  name = 'L- PRED' and office_id= '1' 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068211555480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068211555480957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068211555480957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003969669342041

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030422210693359

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024340152740479

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024340152740479

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0071887969970703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0071887969970703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0071887969970703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0071887969970703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0071887969970703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011844873428345

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0071887969970703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011844873428345

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0071887969970703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011844873428345

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0071887969970703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011844873428345

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043981075286865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0071887969970703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011844873428345

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043981075286865

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004356861114502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0071887969970703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011844873428345

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067811012268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043981075286865

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004356861114502

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035800933837891

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 106 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 111 
 Execution Time:0.00022792816162109

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 106 
 Execution Time:0.00053811073303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select * from examination where examination_id= '90' and   office_id= '1' 
 Execution Time:0.0012080669403076

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 90 
 Execution Time:0.00038003921508789

select * from examination_chargesdetails where  examination_id= '90' 
 Execution Time:0.00040102005004883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039482116699219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043106079101562

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00086092948913574

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0081989765167236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056719779968262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056719779968262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056719779968262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056719779968262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056719779968262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080204010009766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001305103302002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056719779968262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080204010009766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021791458129883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059294700622559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059294700622559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051784515380859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051784515380859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059390068054199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059390068054199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 104 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 109 
 Execution Time:0.00017809867858887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0092389583587646

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0092389583587646

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074315071105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054597854614258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098681449890137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098681449890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098681449890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098681449890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098681449890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098681449890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098681449890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098681449890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083208084106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098681449890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083208084106445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098681449890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083208084106445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005634069442749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005634069442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005634069442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005634069442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005634069442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005634069442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005634069442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005634069442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005634069442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068283081054688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068283081054688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062179565429688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062179565429688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062179565429688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 104 
 Execution Time:0.0020020008087158

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 109 
 Execution Time:0.0026509761810303

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 104 
 Execution Time:0.0010650157928467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select * from examination where examination_id= '91' and   office_id= '1' 
 Execution Time:0.0038840770721436

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013830661773682

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 91 
 Execution Time:0.00077295303344727

select * from examination_chargesdetails where  examination_id= '91' 
 Execution Time:0.0003960132598877

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069689750671387

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066900253295898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066900253295898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034284591674805

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0049159526824951

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078392028808594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 109 
 Execution Time:0.00024080276489258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 114 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060296058654785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 109 
 Execution Time:0.00021004676818848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 114 
 Execution Time:0.00016307830810547

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 109 
 Execution Time:0.00062799453735352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052285194396973

select * from examination where examination_id= '92' and   office_id= '1' 
 Execution Time:0.0065610408782959

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 92 
 Execution Time:0.00064587593078613

select * from examination_chargesdetails where  examination_id= '92' 
 Execution Time:0.00057291984558105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075292587280273

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075292587280273

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016310214996338

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 104 
 Execution Time:0.0015921592712402

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 109 
 Execution Time:0.0015912055969238

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 104 
 Execution Time:0.0012590885162354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0061321258544922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052881240844727

select * from examination where examination_id= '91' and   office_id= '1' 
 Execution Time:0.00088715553283691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 91 
 Execution Time:0.00034093856811523

select * from examination_chargesdetails where  examination_id= '91' 
 Execution Time:0.00049614906311035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067782402038574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067782402038574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042986869812012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 109 
 Execution Time:0.00034713745117188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 114 
 Execution Time:0.00028395652770996

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 109 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063109397888184

select * from examination where examination_id= '92' and   office_id= '1' 
 Execution Time:0.0013329982757568

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.012068033218384

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 92 
 Execution Time:0.0038690567016602

select * from examination_chargesdetails where  examination_id= '92' 
 Execution Time:0.0039348602294922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037441253662109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037441253662109

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030159950256348

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00042200088500977

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084018707275391

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061607360839844

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00094795227050781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098180770874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098180770874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098180770874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 111 
 Execution Time:0.00063109397888184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 116 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009768009185791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009768009185791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0049290657043457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009768009185791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0049290657043457

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 107 
 Execution Time:0.0038280487060547

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.012832164764404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068809986114502

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088906288146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088906288146973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088906288146973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055909156799316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055909156799316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033378601074219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072789192199707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072789192199707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009009838104248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 108 
 Execution Time:0.00038290023803711

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 113 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 108 
 Execution Time:0.00025415420532227

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 113 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 108 
 Execution Time:0.00034308433532715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 113 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 108 
 Execution Time:0.00028300285339355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 113 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003911018371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075888633728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075888633728027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075888633728027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075888633728027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020561218261719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075888633728027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020561218261719

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015830993652344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075888633728027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020561218261719

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015830993652344

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 111 
 Execution Time:0.00031590461730957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 116 
 Execution Time:0.00024700164794922

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 111 
 Execution Time:0.00050520896911621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078201293945312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078201293945312

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045394897460938

select * from examination where examination_id= '93' and   office_id= '1' 
 Execution Time:0.0012619495391846

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 93 
 Execution Time:0.0005500316619873

select * from examination_chargesdetails where  examination_id= '93' 
 Execution Time:0.00037002563476562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060486793518066

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='20' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010690689086914

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070714950561523

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063586235046387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 113 
 Execution Time:0.00030398368835449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 118 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 113 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 118 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052118301391602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 108 
 Execution Time:0.00020408630371094

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 113 
 Execution Time:0.00016403198242188

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 108 
 Execution Time:0.00069689750671387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select * from examination where examination_id= '95' and   office_id= '1' 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 95 
 Execution Time:0.00024914741516113

select * from examination_chargesdetails where  examination_id= '95' 
 Execution Time:0.0001981258392334

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075197219848633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 107 
 Execution Time:0.00036406517028809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.00079798698425293

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 107 
 Execution Time:0.0010759830474854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044701099395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 107 
 Execution Time:0.0031828880310059

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.006432056427002

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 107 
 Execution Time:0.0015280246734619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044319629669189

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086307525634766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086307525634766

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select * from examination where examination_id= '94' and   office_id= '1' 
 Execution Time:0.0006721019744873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 94 
 Execution Time:0.00025796890258789

select * from examination_chargesdetails where  examination_id= '94' 
 Execution Time:0.0002739429473877

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085711479187012

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00051307678222656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0084738731384277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034191608428955

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0084738731384277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034191608428955

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0084738731384277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034191608428955

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 107 
 Execution Time:0.017009019851685

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.00036287307739258

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 107 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071191787719727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071191787719727

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015511512756348

select * from examination where examination_id= '94' and   office_id= '1' 
 Execution Time:0.003389835357666

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039839744567871

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 94 
 Execution Time:0.0049760341644287

select * from examination_chargesdetails where  examination_id= '94' 
 Execution Time:0.0023248195648193

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015239715576172

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006568431854248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060176849365234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006568431854248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060176849365234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010249614715576

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010249614715576

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003201961517334

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027179718017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00041794776916504

SELECT *
FROM `examination`
WHERE `examination_id` = 95 
 Execution Time:0.00068306922912598

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00022602081298828

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00017118453979492

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 108 
 Execution Time:0.00018095970153809

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00013279914855957

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=95 
 Execution Time:0.00072288513183594

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=95 
 Execution Time:0.00054001808166504

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=95 
 Execution Time:0.00030112266540527

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=95 
 Execution Time:0.0023500919342041

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='95' and office_id='1' 
 Execution Time:0.00053310394287109

select * from examination_chargesdetails where  examination_id= '95' 
 Execution Time:0.00075387954711914

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047707557678223

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029110908508301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091719627380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091719627380371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091719627380371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 114 
 Execution Time:0.0037519931793213

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 119 
 Execution Time:0.0026750564575195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055718421936035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084900856018066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084900856018066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0014050006866455

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 113 
 Execution Time:0.0003669261932373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 118 
 Execution Time:0.0002601146697998

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 113 
 Execution Time:0.00095319747924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.006911039352417

select * from examination where examination_id= '96' and   office_id= '1' 
 Execution Time:0.00087499618530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 96 
 Execution Time:0.00037598609924316

select * from examination_chargesdetails where  examination_id= '96' 
 Execution Time:0.0015430450439453

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092291831970215

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092291831970215

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039982795715332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022280216217041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022280216217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022280216217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 103 
 Execution Time:0.0031588077545166

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 108 
 Execution Time:0.0038259029388428

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 103 
 Execution Time:0.0021209716796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.0034821033477783

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00050497055053711

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00065302848815918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010249614715576

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010249614715576

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030169486999512

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014619827270508

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='67' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00074601173400879

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00091195106506348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027308464050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00095605850219727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027308464050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00095605850219727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027308464050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00095605850219727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 115 
 Execution Time:0.00034904479980469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 120 
 Execution Time:0.00043582916259766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00095295906066895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 113 
 Execution Time:0.00034308433532715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 118 
 Execution Time:0.00023889541625977

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 113 
 Execution Time:0.00060105323791504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select * from examination where examination_id= '96' and   office_id= '1' 
 Execution Time:0.0010709762573242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 96 
 Execution Time:0.00022196769714355

select * from examination_chargesdetails where  examination_id= '96' 
 Execution Time:0.00029301643371582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039482116699219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039482116699219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='20' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.005706787109375

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061798095703125

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00076389312744141

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0006558895111084

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='56' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078606605529785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 114 
 Execution Time:0.00034809112548828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 119 
 Execution Time:0.00017094612121582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 114 
 Execution Time:0.00062394142150879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from examination where examination_id= '97' and   office_id= '1' 
 Execution Time:0.0012078285217285

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 97 
 Execution Time:0.00032401084899902

select * from examination_chargesdetails where  examination_id= '97' 
 Execution Time:0.00063896179199219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014159679412842

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092911720275879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092911720275879

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0041038990020752

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00048589706420898

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='43' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065207481384277

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='63' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011730194091797

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00069403648376465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036640167236328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036640167236328

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036640167236328

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 116 
 Execution Time:0.010524034500122

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 121 
 Execution Time:0.00092792510986328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 116 
 Execution Time:0.00053000450134277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 121 
 Execution Time:0.00060105323791504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 116 
 Execution Time:0.0004267692565918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 121 
 Execution Time:0.00053286552429199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078296661376953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 110 
 Execution Time:0.00030708312988281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 115 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049519538879395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 110 
 Execution Time:0.00034904479980469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 115 
 Execution Time:0.00024700164794922

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 110 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select * from examination where examination_id= '100' and   office_id= '1' 
 Execution Time:0.00070691108703613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 100 
 Execution Time:0.00043201446533203

select * from examination_chargesdetails where  examination_id= '100' 
 Execution Time:0.00033283233642578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098204612731934

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098204612731934

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035309791564941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098013877868652

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00094795227050781

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010449886322021

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086021423339844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086021423339844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086021423339844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 116 
 Execution Time:0.00032806396484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 121 
 Execution Time:0.00023293495178223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 116 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select * from examination where examination_id= '99' and   office_id= '1' 
 Execution Time:0.00094223022460938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 99 
 Execution Time:0.00057387351989746

select * from examination_chargesdetails where  examination_id= '99' 
 Execution Time:0.00054097175598145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068902969360352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006568431854248

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006568431854248

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030803680419922

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00069999694824219

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00090408325195312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 105 
 Execution Time:0.00045299530029297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 110 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078511238098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021700859069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021700859069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021700859069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021700859069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021700859069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021700859069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014290809631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021700859069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014290809631348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021700859069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014290809631348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0020201206207275

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0020201206207275

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0011579990386963

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016019344329834

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016019344329834

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073695182800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073695182800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025811195373535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022881031036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025811195373535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022881031036377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026979446411133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025811195373535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022881031036377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026979446411133

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 115 
 Execution Time:0.0012540817260742

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 120 
 Execution Time:0.0018150806427002

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 115 
 Execution Time:0.0018861293792725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027878284454346

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027878284454346

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 115 
 Execution Time:0.0025990009307861

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 120 
 Execution Time:0.0028541088104248

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 115 
 Execution Time:0.0028810501098633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032141208648682

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.024853944778442

select * from examination where examination_id= '98' and   office_id= '1' 
 Execution Time:0.0043768882751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033731460571289

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 98 
 Execution Time:0.01891303062439

select * from examination_chargesdetails where  examination_id= '98' 
 Execution Time:0.023948907852173

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0174560546875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0174560546875

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.005486011505127

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0159010887146

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00091290473937988

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00091290473937988

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082612037658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082612037658691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014181137084961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082612037658691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00082087516784668

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00082087516784668

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00035381317138672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049114227294922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049114227294922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011069774627686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011069774627686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014441013336182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011069774627686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014441013336182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020239353179932

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0005180835723877

SELECT *
FROM `examination`
WHERE `examination_id` = 95 
 Execution Time:0.00073003768920898

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00024700164794922

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 108 
 Execution Time:0.00018405914306641

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00014710426330566

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=95 
 Execution Time:0.00075602531433105

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=95 
 Execution Time:0.00076413154602051

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=95 
 Execution Time:0.0018041133880615

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=95 
 Execution Time:0.0014948844909668

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='95' and office_id='1' 
 Execution Time:0.0015239715576172

select * from examination_chargesdetails where  examination_id= '95' 
 Execution Time:0.00034594535827637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 117 
 Execution Time:0.00053501129150391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 122 
 Execution Time:0.00039219856262207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029110908508301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 113 
 Execution Time:0.002000093460083

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 118 
 Execution Time:0.0013968944549561

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 113 
 Execution Time:0.0014810562133789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065751075744629

select * from examination where examination_id= '96' and   office_id= '1' 
 Execution Time:0.0039548873901367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 96 
 Execution Time:0.0039830207824707

select * from examination_chargesdetails where  examination_id= '96' 
 Execution Time:0.0032041072845459

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033559799194336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033559799194336

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033488273620605

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.014381885528564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 115 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 120 
 Execution Time:0.00023698806762695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 115 
 Execution Time:0.00073504447937012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select * from examination where examination_id= '98' and   office_id= '1' 
 Execution Time:0.0034730434417725

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 98 
 Execution Time:0.00018501281738281

select * from examination_chargesdetails where  examination_id= '98' 
 Execution Time:0.0017571449279785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019590854644775

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019590854644775

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098204612731934

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049495697021484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011019706726074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052595138549805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082588195800781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082588195800781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082588195800781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082588195800781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082588195800781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082588195800781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 113 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 118 
 Execution Time:0.00045299530029297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 113 
 Execution Time:0.00069594383239746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select * from examination where examination_id= '96' and   office_id= '1' 
 Execution Time:0.00088596343994141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 96 
 Execution Time:0.00031614303588867

select * from examination_chargesdetails where  examination_id= '96' 
 Execution Time:0.00036311149597168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006101131439209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006101131439209

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.001105785369873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='20' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070714950561523

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056314468383789

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065803527832031

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061202049255371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00016403198242188

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='56' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00083303451538086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 107 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.00036907196044922

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 107 
 Execution Time:0.00049018859863281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select * from examination where examination_id= '94' and   office_id= '1' 
 Execution Time:0.00078392028808594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 94 
 Execution Time:0.00027894973754883

select * from examination_chargesdetails where  examination_id= '94' 
 Execution Time:0.00037717819213867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056099891662598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026850700378418

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026850700378418

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.001352071762085

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 103 
 Execution Time:0.00036001205444336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 108 
 Execution Time:0.00022006034851074

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 103 
 Execution Time:0.00068998336791992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select * from examination where examination_id= '88' and   office_id= '1' 
 Execution Time:0.0042369365692139

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 88 
 Execution Time:0.00066018104553223

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00047779083251953

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054383277893066

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00042200088500977

SELECT *
FROM `examination`
WHERE `examination_id` = 88 
 Execution Time:0.0004889965057373

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00022411346435547

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0029752254486084

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 103 
 Execution Time:0.00026583671569824

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0002598762512207

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=88 
 Execution Time:0.0025370121002197

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=88 
 Execution Time:0.00030899047851562

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=88 
 Execution Time:0.00021910667419434

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=88 
 Execution Time:0.00042295455932617

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='88' and office_id='1' 
 Execution Time:0.00031781196594238

select * from examination_chargesdetails where  examination_id= '88' 
 Execution Time:0.00026798248291016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 118 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 123 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 119 
 Execution Time:0.0016121864318848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 124 
 Execution Time:0.00090193748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064260959625244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064260959625244

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017571449279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064260959625244

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017571449279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064260959625244

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017571449279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0063691139221191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064260959625244

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017571449279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0063691139221191

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050442218780518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064260959625244

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017571449279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0063691139221191

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050442218780518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031471252441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064260959625244

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017571449279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0063691139221191

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050442218780518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076699256896973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036211013793945

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063180923461914

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063180923461914

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052881240844727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052881240844727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012631416320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012631416320801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071501731872559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012631416320801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043010711669922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019097328186035

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040209293365479

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040209293365479

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0058000087738037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024039745330811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024039745330811

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 120 
 Execution Time:0.0014879703521729

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 125 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077009201049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096678733825684

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096678733825684

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096678733825684

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 120 
 Execution Time:0.00048089027404785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 125 
 Execution Time:0.00043296813964844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 120 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select * from examination where examination_id= '105' and   office_id= '1' 
 Execution Time:0.0025320053100586

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 105 
 Execution Time:0.0043399333953857

select * from examination_chargesdetails where  examination_id= '105' 
 Execution Time:0.0011870861053467

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022540092468262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022540092468262

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042295455932617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051307678222656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014948844909668

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 122 
 Execution Time:0.00079894065856934

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 127 
 Execution Time:0.00041317939758301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060296058654785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 122 
 Execution Time:0.00043010711669922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 127 
 Execution Time:0.00031900405883789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 122 
 Execution Time:0.00080585479736328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075697898864746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075697898864746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051689147949219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033538341522217

select * from examination where examination_id= '106' and   office_id= '1' 
 Execution Time:0.0033209323883057

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 106 
 Execution Time:0.0039181709289551

select * from examination_chargesdetails where  examination_id= '106' 
 Execution Time:0.0019950866699219

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.012070894241333

SELECT *
FROM `examination`
WHERE `examination_id` = 102 
 Execution Time:0.0081660747528076

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0036900043487549

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.033500909805298

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 117 
 Execution Time:0.0032830238342285

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 4 
 Execution Time:0.0038001537322998

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=102 
 Execution Time:0.0017380714416504

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=102 
 Execution Time:0.0040078163146973

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=102 
 Execution Time:0.0039501190185547

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=102 
 Execution Time:0.0041530132293701

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='102' and office_id='1' 
 Execution Time:0.0013189315795898

select * from examination_chargesdetails where  examination_id= '102' 
 Execution Time:0.0032079219818115

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 121 
 Execution Time:0.00071310997009277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 126 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 121 
 Execution Time:0.00064587593078613

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 126 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0030438899993896

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001345157623291

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001345157623291

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011298656463623

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001345157623291

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011298656463623

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 100 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00047898292541504

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 100 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from examination where examination_id= '85' and   office_id= '1' 
 Execution Time:0.0026869773864746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 85 
 Execution Time:0.012270927429199

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.0016422271728516

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025429725646973

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018429756164551

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018429756164551

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

SELECT *
FROM `examination`
WHERE `examination_id` = 85 
 Execution Time:0.00064301490783691

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00043511390686035

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00042104721069336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 100 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0015559196472168

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=85 
 Execution Time:0.00039315223693848

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=85 
 Execution Time:0.00024104118347168

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=85 
 Execution Time:0.00021600723266602

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=85 
 Execution Time:0.00045990943908691

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='85' and office_id='1' 
 Execution Time:0.00055599212646484

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018467903137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018467903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018467903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018467903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018467903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024938583374023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018467903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024938583374023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019040107727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018467903137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010819435119629

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024938583374023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00099420547485352


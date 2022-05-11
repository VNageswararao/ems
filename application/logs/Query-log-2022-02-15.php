select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022737979888916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022737979888916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022737979888916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022737979888916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016019344329834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022737979888916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016019344329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021440982818604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022737979888916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016019344329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021440982818604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022737979888916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016019344329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021440982818604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022737979888916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016019344329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021440982818604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020291805267334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022737979888916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016019344329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021440982818604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020291805267334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022737979888916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016019344329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021440982818604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020291805267334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021040439605713

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033590793609619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033590793609619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033590793609619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033590793609619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033590793609619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033590793609619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033590793609619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033590793609619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033590793609619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082802772521973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033590793609619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082802772521973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0065701007843018

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0065701007843018

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 19 
 Execution Time:0.00062680244445801

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 20 
 Execution Time:0.00089812278747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021040439605713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026600360870361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026600360870361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026600360870361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026600360870361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011279582977295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026600360870361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011279582977295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026600360870361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011279582977295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00079607963562012

SELECT *
FROM `examination`
WHERE `examination_id` = 7 
 Execution Time:0.00048995018005371

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00015687942504883

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00041508674621582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 13 
 Execution Time:0.00018620491027832

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00058889389038086

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=7 
 Execution Time:0.00061202049255371

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=7 
 Execution Time:0.00052118301391602

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=7 
 Execution Time:0.00060796737670898

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=7 
 Execution Time:0.0024151802062988

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='7' and office_id='1' 
 Execution Time:0.00049591064453125

select * from examination_chargesdetails where  examination_id= '7' 
 Execution Time:0.0015389919281006

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 19 
 Execution Time:0.00022697448730469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 20 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select * from examination where examination_id= '18' and   office_id= '1' 
 Execution Time:0.0012140274047852

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 18 
 Execution Time:0.00054597854614258

select * from examination_chargesdetails where  examination_id= '18' 
 Execution Time:0.00039219856262207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011811256408691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025930404663086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025930404663086

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032281875610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 19 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 20 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087308883666992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087308883666992

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060009956359863

select * from examination where examination_id= '18' and   office_id= '1' 
 Execution Time:0.0012609958648682

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 18 
 Execution Time:0.00041007995605469

select * from examination_chargesdetails where  examination_id= '18' 
 Execution Time:0.00031900405883789

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0028238296508789

select count(*) as cnt from medicine_category where  name = 'EYEDROPS' and office_id= '1' 
 Execution Time:0.00056290626525879

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select count(*) as cnt from medicine_instruction where  name = '4 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00068306922912598

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select count(*) as cnt from medicine where  name = 'LUBREX' and office_id= '1' 
 Execution Time:0.0018160343170166

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0012590885162354

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0012590885162354

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select count(*) as cnt from medicine where  name = 'REFRESH TEARS' and office_id= '1' 
 Execution Time:0.00032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 19 
 Execution Time:0.00022697448730469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 20 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select * from examination where examination_id= '18' and   office_id= '1' 
 Execution Time:0.00083184242248535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 18 
 Execution Time:0.00029492378234863

select * from examination_chargesdetails where  examination_id= '18' 
 Execution Time:0.00014996528625488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040388107299805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040388107299805

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00023007392883301

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0003819465637207

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071907043457031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 19 
 Execution Time:0.0002131462097168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 20 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select * from examination where examination_id= '18' and   office_id= '1' 
 Execution Time:0.00066590309143066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 18 
 Execution Time:0.00046682357788086

select * from examination_chargesdetails where  examination_id= '18' 
 Execution Time:0.00021815299987793

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038480758666992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 19 
 Execution Time:0.0002439022064209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 20 
 Execution Time:0.00016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040578842163086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036311149597168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036311149597168

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002288818359375

select * from examination where examination_id= '18' and   office_id= '1' 
 Execution Time:0.00076389312744141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 18 
 Execution Time:0.00043296813964844

select * from examination_chargesdetails where  examination_id= '18' 
 Execution Time:0.0005650520324707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 19 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 20 
 Execution Time:0.00016880035400391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select * from examination where examination_id= '18' and   office_id= '1' 
 Execution Time:0.00067305564880371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010390281677246

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 18 
 Execution Time:0.00039100646972656

select * from examination_chargesdetails where  examination_id= '18' 
 Execution Time:0.00043392181396484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046586990356445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 19 
 Execution Time:0.0003352165222168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 20 
 Execution Time:0.00022315979003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select * from examination where examination_id= '18' and   office_id= '1' 
 Execution Time:0.00085711479187012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 18 
 Execution Time:0.00025391578674316

select * from examination_chargesdetails where  examination_id= '18' 
 Execution Time:0.0001981258392334

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00085902214050293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00085902214050293

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select count(*) as cnt from medicine where  name = 'ZIVI FRESH' and office_id= '1' 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001615047454834

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001615047454834

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0050389766693115

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001615047454834

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0050389766693115

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 19 
 Execution Time:0.0017960071563721

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 20 
 Execution Time:0.0014841556549072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011441707611084

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003972053527832

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003972053527832

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033688545227051

select * from examination where examination_id= '18' and   office_id= '1' 
 Execution Time:0.0006561279296875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 18 
 Execution Time:0.00018310546875

select * from examination_chargesdetails where  examination_id= '18' 
 Execution Time:0.00069594383239746

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00099778175354004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015320777893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015320777893066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011770725250244

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089383125305176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015320777893066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010390281677246

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00043797492980957

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092697143554688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092697143554688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092697143554688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074505805969238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074505805969238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00080108642578125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00080108642578125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 21 
 Execution Time:0.00047707557678223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 22 
 Execution Time:0.00044584274291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000762939453125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072312355041504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072312355041504

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048685073852539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048685073852539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032687187194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00061798095703125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='9' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009000301361084

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00061798095703125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='9' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009000301361084

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='9' and  office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070595741271973

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070595741271973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061607360839844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061607360839844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003403902053833

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003403902053833

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038919448852539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006711483001709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006711483001709

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095200538635254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095200538635254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023159980773926

select count(*) as cnt from patient_registration where  patient_registration_id= '21' and  office_id= '1' 
 Execution Time:0.0039029121398926

select count(*) as cnt from patient_registration where  patient_registration_id= '21' and  office_id= '1' 
 Execution Time:0.0039029121398926

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='21' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039181709289551

select count(*) as cnt from patient_registration where  patient_registration_id= '21' and  office_id= '1' 
 Execution Time:0.0039029121398926

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='21' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039181709289551

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='21' and  office_id= '1' 
 Execution Time:0.0038230419158936

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0033299922943115

select * from investigation where investigation_id='12' and office_id= '1' 
 Execution Time:0.00080299377441406

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0039019584655762

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select count(*) as cnt from charge_type where  name = 'INVESTIGATION' and office_id= '1' 
 Execution Time:0.00080490112304688

select count(*) as cnt from charge_type where  name = 'LASER' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from charge_type where  name = 'INJECTION' and office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from charge_type where  name = 'SURGERY' and office_id= '1' 
 Execution Time:0.00047516822814941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select count(*) as cnt from patient_registration where  patient_registration_id= '20' and  office_id= '1' 
 Execution Time:0.00040984153747559

select count(*) as cnt from patient_registration where  patient_registration_id= '20' and  office_id= '1' 
 Execution Time:0.00040984153747559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='20' and  doctors_registration.office_id= '1' 
 Execution Time:0.00072002410888672

select count(*) as cnt from patient_registration where  patient_registration_id= '20' and  office_id= '1' 
 Execution Time:0.00040984153747559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='20' and  doctors_registration.office_id= '1' 
 Execution Time:0.00072002410888672

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='20' and  office_id= '1' 
 Execution Time:0.00016403198242188

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006411075592041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006411075592041

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041890144348145

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='24' and  office_id= '1' 
 Execution Time:0.00036382675170898

select count(*) as cnt from patient_followup where  patient_registration_id = '24' and patient_followup_date='2022-02-16' and office_id= '1' 
 Execution Time:0.0023970603942871

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.0003809928894043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='24' and  doctors_registration.office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.0003809928894043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='24' and  doctors_registration.office_id= '1' 
 Execution Time:0.00043392181396484

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='24' and  office_id= '1' 
 Execution Time:0.00019097328186035

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085115432739258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085115432739258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014188289642334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014188289642334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014188289642334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014188289642334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014188289642334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014188289642334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00034809112548828

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='24' and  doctors_registration.office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00034809112548828

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='24' and  doctors_registration.office_id= '1' 
 Execution Time:0.00071501731872559

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='24' and  office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043201446533203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009768009185791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009768009185791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009768009185791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 22 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 23 
 Execution Time:0.00016498565673828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021839141845703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0033659934997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0033659934997559

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select count(*) as cnt from patient_registration where  patient_registration_id= '23' and  office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from patient_registration where  patient_registration_id= '23' and  office_id= '1' 
 Execution Time:0.00047397613525391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='23' and  doctors_registration.office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_registration where  patient_registration_id= '23' and  office_id= '1' 
 Execution Time:0.00047397613525391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='23' and  doctors_registration.office_id= '1' 
 Execution Time:0.00053596496582031

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='23' and  office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040578842163086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040578842163086

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select * from investigation where  investigation_id=24  and office_id= 1 and status=1 
 Execution Time:0.001039981842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086307525634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086307525634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036020278930664

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036020278930664

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038690567016602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056099891662598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 20 
 Execution Time:0.00025486946105957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 21 
 Execution Time:0.00016903877258301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039887428283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039887428283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 23 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 24 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 23 
 Execution Time:0.00060415267944336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 24 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00084590911865234

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00084590911865234

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055408477783203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070595741271973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070595741271973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070595741271973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011050701141357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070595741271973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011050701141357

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070595741271973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011050701141357

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 20 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 21 
 Execution Time:0.00035214424133301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select * from examination where examination_id= '21' and   office_id= '1' 
 Execution Time:0.00082707405090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 21 
 Execution Time:0.0012650489807129

select * from examination_chargesdetails where  examination_id= '21' 
 Execution Time:0.0010619163513184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086402893066406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086402893066406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066709518432617

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0014100074768066

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030922889709473

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030922889709473

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 25 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 26 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select count(*) as cnt from medicine where  name = 'HI COOL' and office_id= '1' 
 Execution Time:0.00047421455383301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056099891662598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 20 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 21 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select * from examination where examination_id= '21' and   office_id= '1' 
 Execution Time:0.00082015991210938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 21 
 Execution Time:0.00046777725219727

select * from examination_chargesdetails where  examination_id= '21' 
 Execution Time:0.00027608871459961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0003359317779541

SELECT *
FROM `examination`
WHERE `examination_id` = 21 
 Execution Time:0.00058698654174805

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00020909309387207

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00082302093505859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 20 
 Execution Time:0.00022697448730469

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 4 
 Execution Time:0.00047016143798828

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=21 
 Execution Time:0.00034999847412109

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=21 
 Execution Time:0.00024700164794922

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=21 
 Execution Time:0.00020003318786621

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=21 
 Execution Time:0.00022292137145996

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='21' and office_id='1' 
 Execution Time:0.00040984153747559

select * from examination_chargesdetails where  examination_id= '21' 
 Execution Time:0.0001978874206543

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042829513549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042829513549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042829513549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042829513549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042829513549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042829513549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042829513549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042829513549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079512596130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042829513549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079512596130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042829513549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079512596130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022006034851074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045585632324219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057315826416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057315826416016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057315826416016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.01033091545105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.01033091545105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.01033091545105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 23 
 Execution Time:0.00078511238098145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 24 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078487396240234

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078487396240234

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from examination where examination_id= '23' and   office_id= '1' 
 Execution Time:0.00088000297546387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 23 
 Execution Time:0.0010449886322021

select * from examination_chargesdetails where  examination_id= '23' 
 Execution Time:0.00048208236694336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063300132751465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075578689575195

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075578689575195

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 21 
 Execution Time:0.00030708312988281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 22 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011458396911621

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011458396911621

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select * from examination where examination_id= '19' and   office_id= '1' 
 Execution Time:0.0037689208984375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003917932510376

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 19 
 Execution Time:0.0029799938201904

select * from examination_chargesdetails where  examination_id= '19' 
 Execution Time:0.0022909641265869

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085210800170898

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084805488586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054717063903809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054717063903809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063276290893555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063276290893555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063276290893555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063276290893555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063276290893555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063276290893555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063276290893555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063276290893555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063276290893555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075101852416992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063276290893555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075101852416992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0017621517181396

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0017621517181396

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00098896026611328

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0017621517181396

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00098896026611328

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00022602081298828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 22 
 Execution Time:0.00030612945556641

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 23 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select * from examination where examination_id= '20' and   office_id= '1' 
 Execution Time:0.0010988712310791

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 20 
 Execution Time:0.000762939453125

select * from examination_chargesdetails where  examination_id= '20' 
 Execution Time:0.00046110153198242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000885009765625

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000885009765625

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078701972961426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.0005638599395752

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.00068497657775879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081610679626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081610679626465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034379959106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081610679626465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026583671569824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026583671569824

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00017809867858887

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085115432739258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085115432739258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020599365234375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 28 
 Execution Time:0.00022292137145996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 29 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011429786682129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 27 
 Execution Time:0.00025296211242676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 28 
 Execution Time:0.00017094612121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012779235839844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018241405487061

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018241405487061

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0033669471740723

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057888031005859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057888031005859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00087809562683105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.00024318695068359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select * from examination where examination_id= '24' and   office_id= '1' 
 Execution Time:0.00085115432739258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 24 
 Execution Time:0.00074887275695801

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00043106079101562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001539945602417

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001539945602417

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031685829162598

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010890960693359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028541088104248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028541088104248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028541088104248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 27 
 Execution Time:0.00073814392089844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 28 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select * from examination where examination_id= '25' and   office_id= '1' 
 Execution Time:0.0012600421905518

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 25 
 Execution Time:0.00054001808166504

select * from examination_chargesdetails where  examination_id= '25' 
 Execution Time:0.00054287910461426

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026118755340576

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026118755340576

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 27 
 Execution Time:0.00055193901062012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 28 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 27 
 Execution Time:0.00042581558227539

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 28 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058817863464355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058817863464355

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select * from examination where examination_id= '25' and   office_id= '1' 
 Execution Time:0.0014040470123291

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 25 
 Execution Time:0.00041103363037109

select * from examination_chargesdetails where  examination_id= '25' 
 Execution Time:0.0020880699157715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060081481933594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 29 
 Execution Time:0.00031495094299316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 30 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 25 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 26 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0057899951934814

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0057899951934814

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0040771961212158

select * from examination where examination_id= '22' and   office_id= '1' 
 Execution Time:0.0008540153503418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 22 
 Execution Time:0.00025296211242676

select * from examination_chargesdetails where  examination_id= '22' 
 Execution Time:0.00015616416931152

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0013298988342285

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select count(*) as cnt from medicine where  name = 'Eyemist Forte' and office_id= '1' 
 Execution Time:0.00054097175598145

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select count(*) as cnt from medicine where  name = 'Vigamox' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from medicine_category where  name = 'TABLET' and office_id= '1' 
 Execution Time:0.00039911270141602

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select count(*) as cnt from medicine_category where  name = 'OINTMENT' and office_id= '1' 
 Execution Time:0.00026392936706543

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

select count(*) as cnt from medicine_instruction where  name = '@ Night' and office_id= '1' 
 Execution Time:0.00054192543029785

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0021188259124756

select count(*) as cnt from medicine where  name = 'Eyemist Gel' and office_id= '1' 
 Execution Time:0.00053310394287109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 25 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 26 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select * from examination where examination_id= '22' and   office_id= '1' 
 Execution Time:0.0011019706726074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 22 
 Execution Time:0.00056004524230957

select * from examination_chargesdetails where  examination_id= '22' 
 Execution Time:0.00037097930908203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027680397033691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053596496582031

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059199333190918

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0003359317779541

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select count(*) as cnt from medicine_instruction where  name = '1-0-1' and office_id= '1' 
 Execution Time:0.00076889991760254

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select count(*) as cnt from medicine_instruction where  name = '0-0-1' and office_id= '1' 
 Execution Time:0.001209020614624

select count(*) as cnt from medicine_instruction where  name = '1-1-1' and office_id= '1' 
 Execution Time:0.0007328987121582

select count(*) as cnt from medicine_instruction where  name = '1-0-0' and office_id= '1' 
 Execution Time:0.00039291381835938

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select count(*) as cnt from medicine where  name = 'Diclomint-s' and office_id= '1' 
 Execution Time:0.0003969669342041

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0048539638519287

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from medicine where  name = 'Panmint-40' and office_id= '1' 
 Execution Time:0.00039005279541016

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select count(*) as cnt from medicine where  name = 'Augment-625' and office_id= '1' 
 Execution Time:0.00057888031005859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 28 
 Execution Time:0.00027704238891602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 29 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024750232696533

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.00089406967163086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.00023913383483887

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.00021481513977051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022909641265869

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022909641265869

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044159889221191

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.002424955368042

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052595138549805

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='8' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052189826965332

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00041103363037109

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00036191940307617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 20 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 21 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062298774719238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062298774719238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048708915710449

select * from examination where examination_id= '21' and   office_id= '1' 
 Execution Time:0.0011229515075684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 21 
 Execution Time:0.00055980682373047

select * from examination_chargesdetails where  examination_id= '21' 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 23 
 Execution Time:0.00048112869262695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 24 
 Execution Time:0.00053286552429199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select * from examination where examination_id= '23' and   office_id= '1' 
 Execution Time:0.010267019271851

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050480365753174

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 23 
 Execution Time:0.0012521743774414

select * from examination_chargesdetails where  examination_id= '23' 
 Execution Time:0.00077080726623535

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056099891662598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065493583679199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065493583679199

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094413757324219

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 27 
 Execution Time:0.00037908554077148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 28 
 Execution Time:0.00054192543029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010519027709961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010519027709961

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select * from examination where examination_id= '25' and   office_id= '1' 
 Execution Time:0.0010509490966797

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 25 
 Execution Time:0.00048398971557617

select * from examination_chargesdetails where  examination_id= '25' 
 Execution Time:0.00034904479980469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079989433288574

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084996223449707

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select count(*) as cnt from medicine where  name = 'Eye Vital' and office_id= '1' 
 Execution Time:0.00043487548828125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 27 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 28 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select * from examination where examination_id= '25' and   office_id= '1' 
 Execution Time:0.00099587440490723

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 25 
 Execution Time:0.00036096572875977

select * from examination_chargesdetails where  examination_id= '25' 
 Execution Time:0.0002598762512207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075507164001465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075507164001465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049805641174316

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071811676025391

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056195259094238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 29 
 Execution Time:0.0002899169921875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 30 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059103965759277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059103965759277

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select * from examination where examination_id= '26' and   office_id= '1' 
 Execution Time:0.0008540153503418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 26 
 Execution Time:0.00019288063049316

select * from examination_chargesdetails where  examination_id= '26' 
 Execution Time:0.00015401840209961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.010380983352661

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.010380983352661

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.010380983352661

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 27 
 Execution Time:0.00047087669372559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 28 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select * from examination where examination_id= '25' and   office_id= '1' 
 Execution Time:0.00078821182250977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 25 
 Execution Time:0.00053691864013672

select * from examination_chargesdetails where  examination_id= '25' 
 Execution Time:0.00037693977355957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045990943908691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045990943908691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035500526428223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063586235046387

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select count(*) as cnt from medicine where  name = 'I-Site' and office_id= '1' 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 27 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 28 
 Execution Time:0.00029182434082031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select * from examination where examination_id= '25' and   office_id= '1' 
 Execution Time:0.00086712837219238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 25 
 Execution Time:0.00020480155944824

select * from examination_chargesdetails where  examination_id= '25' 
 Execution Time:0.0001671314239502

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010199546813965

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010199546813965

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034308433532715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041913986206055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 27 
 Execution Time:0.00033879280090332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 28 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select * from examination where examination_id= '25' and   office_id= '1' 
 Execution Time:0.00085687637329102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 25 
 Execution Time:0.00013208389282227

select * from examination_chargesdetails where  examination_id= '25' 
 Execution Time:0.00011110305786133

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078415870666504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078415870666504

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063705444335938

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='12' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052309036254883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 29 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 30 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select * from examination where examination_id= '26' and   office_id= '1' 
 Execution Time:0.004993200302124

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020790100097656

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 26 
 Execution Time:0.00096607208251953

select * from examination_chargesdetails where  examination_id= '26' 
 Execution Time:0.0015900135040283

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083184242248535

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066208839416504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 25 
 Execution Time:0.00029206275939941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 26 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010941028594971

select * from examination where examination_id= '22' and   office_id= '1' 
 Execution Time:0.000762939453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 22 
 Execution Time:0.00043296813964844

select * from examination_chargesdetails where  examination_id= '22' 
 Execution Time:0.00026607513427734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044393539428711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044393539428711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0016920566558838

SELECT *
FROM `examination`
WHERE `examination_id` = 22 
 Execution Time:0.0038580894470215

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00068306922912598

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00051403045654297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 25 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00032401084899902

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=22 
 Execution Time:0.00037002563476562

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=22 
 Execution Time:0.00031590461730957

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=22 
 Execution Time:0.00026798248291016

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=22 
 Execution Time:0.00030279159545898

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='22' and office_id='1' 
 Execution Time:0.00034499168395996

select * from examination_chargesdetails where  examination_id= '22' 
 Execution Time:0.00027704238891602

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00069594383239746

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0019440650939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087285041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087285041809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087285041809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057315826416016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057315826416016

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010139942169189

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010139942169189

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079798698425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079798698425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002439022064209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022668838500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022668838500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020499229431152

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022668838500977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020499229431152

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 30 
 Execution Time:0.00037980079650879

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 31 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016870498657227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.00034689903259277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select * from examination where examination_id= '24' and   office_id= '1' 
 Execution Time:0.0012540817260742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 24 
 Execution Time:0.0015530586242676

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.0011370182037354

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015709400177002

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015709400177002

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034594535827637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046682357788086

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00071191787719727

SELECT *
FROM `examination`
WHERE `examination_id` = 24 
 Execution Time:0.00093221664428711

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00038790702819824

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0005340576171875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.00039482116699219

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00030517578125

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=24 
 Execution Time:0.00064706802368164

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=24 
 Execution Time:0.00062990188598633

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=24 
 Execution Time:0.00047993659973145

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=24 
 Execution Time:0.00064682960510254

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='24' and office_id='1' 
 Execution Time:0.00044608116149902

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00023198127746582

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0018010139465332

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00094890594482422

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='12' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011310577392578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 31 
 Execution Time:0.00027918815612793

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 32 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064682960510254

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0028810501098633

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0028810501098633

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00038480758666992

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00038480758666992

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00023412704467773

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0027790069580078

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0027790069580078

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00029206275939941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032901763916016

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.00034594535827637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071096420288086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071096420288086

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select * from examination where examination_id= '24' and   office_id= '1' 
 Execution Time:0.00076508522033691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 24 
 Execution Time:0.00028705596923828

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00038909912109375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00092387199401855

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005950927734375

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00049710273742676

SELECT *
FROM `examination`
WHERE `examination_id` = 24 
 Execution Time:0.00059914588928223

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00019598007202148

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00018811225891113

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.0002281665802002

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00016212463378906

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=24 
 Execution Time:0.00033211708068848

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=24 
 Execution Time:0.00028300285339355

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=24 
 Execution Time:0.00022697448730469

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=24 
 Execution Time:0.00077390670776367

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='24' and office_id='1' 
 Execution Time:0.00033998489379883

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00038504600524902

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-15' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001270055770874

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0012500286102295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0012500286102295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0012500286102295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0012500286102295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-02-15' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.002842903137207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-15' and  '2022-02-15' and  billing_master.office_id= 1        
 Execution Time:0.0012249946594238

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-15' and  '2022-02-15' and  billing_master.office_id= 1        
 Execution Time:0.0012249946594238

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-15' and '2022-02-15' and  patient_registration.office_id= 1      
 Execution Time:0.0022029876708984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091385841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091385841369629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091385841369629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041508674621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041508674621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-15' and '2022-02-15' and  patient_registration.office_id= 1      
 Execution Time:0.0010550022125244

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-15' and '2022-02-15' and  patient_registration.office_id= 1      
 Execution Time:0.0021710395812988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.00083208084106445

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.00083208084106445

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-14' and '2022-02-14' and  patient_registration.office_id= 1      
 Execution Time:0.0016460418701172

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.014146089553833

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0092871189117432

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.014146089553833

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0092871189117432

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.014146089553833

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0092871189117432

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012991428375244

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 31 
 Execution Time:0.00047016143798828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 32 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00096893310546875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0012750625610352

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00099802017211914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011789798736572

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011789798736572

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010819435119629

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='12' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0027668476104736

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select count(*) as cnt from medicine where  name = 'Nepafinac' and office_id= '1' 
 Execution Time:0.00088000297546387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 31 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 32 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019400119781494

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.0010600090026855

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.00058603286743164

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00042390823364258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054597854614258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054597854614258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='13' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0061671733856201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010709762573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010709762573242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010709762573242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090503692626953

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090503692626953

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006568431854248

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006568431854248

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031719207763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031719207763672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091860294342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031719207763672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091860294342041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025808811187744

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030179023742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030179023742676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094294548034668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030179023742676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028760433197021

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028760433197021

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028760433197021

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.00040316581726074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018789768218994

select * from examination where examination_id= '24' and   office_id= '1' 
 Execution Time:0.0013020038604736

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 24 
 Execution Time:0.0017211437225342

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.0019080638885498

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001723051071167

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001723051071167

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0025639533996582

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00083804130554199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 30 
 Execution Time:0.0003199577331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 31 
 Execution Time:0.00025415420532227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select * from examination where examination_id= '28' and   office_id= '1' 
 Execution Time:0.0013298988342285

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 28 
 Execution Time:0.00045418739318848

select * from examination_chargesdetails where  examination_id= '28' 
 Execution Time:0.00042104721069336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002591609954834

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010290145874023

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059795379638672

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072884559631348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.0003669261932373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select * from examination where examination_id= '24' and   office_id= '1' 
 Execution Time:0.0012390613555908

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 24 
 Execution Time:0.00056004524230957

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00047683715820312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064682960510254

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011990070343018

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011990070343018

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045108795166016

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00081396102905273

SELECT *
FROM `examination`
WHERE `examination_id` = 24 
 Execution Time:0.00070309638977051

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0004889965057373

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00054717063903809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00072407722473145

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=24 
 Execution Time:0.00038599967956543

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=24 
 Execution Time:0.00031614303588867

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=24 
 Execution Time:0.00038599967956543

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=24 
 Execution Time:0.00051188468933105

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='24' and office_id='1' 
 Execution Time:0.00072598457336426

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00025296211242676

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0007021427154541

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.00067996978759766

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00020599365234375

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00045013427734375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 31 
 Execution Time:0.00019311904907227

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00029706954956055

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.0007481575012207

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.00047802925109863

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00037193298339844

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=29 
 Execution Time:0.00035786628723145

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.00040292739868164

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00031208992004395

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0013649463653564

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023200511932373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040128231048584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023200511932373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040128231048584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037229061126709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023200511932373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040128231048584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037229061126709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.003291130065918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.0038690567016602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038619041442871

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079917907714844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075793266296387

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075793266296387

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0048019886016846

select * from examination where examination_id= '24' and   office_id= '1' 
 Execution Time:0.0012450218200684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 24 
 Execution Time:0.00059199333190918

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00042510032653809

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001215934753418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` IS NULL 
 Execution Time:0.00017905235290527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` IS NULL 
 Execution Time:0.00011396408081055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` IS NULL 
 Execution Time:0.00043988227844238

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` IS NULL 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='12' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0029199123382568

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select count(*) as cnt from medicine_instruction where  name = '2 Times a day' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from medicine_instruction where  name = '3 Times a day' and office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from medicine_instruction where  name = '6 Times a day' and office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from medicine_instruction where  name = '8 Times a day' and office_id= '1' 
 Execution Time:0.0003819465637207

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from medicine where  name = 'VIGAMOX EYE DROPS' and office_id= '1' 
 Execution Time:0.00060200691223145

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select count(*) as cnt from medicine where  name = 'ZYMAR EYE DROPS' and office_id= '1' 
 Execution Time:0.0005490779876709

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from medicine where  name = 'FML-T EYE DROPS' and office_id= '1' 
 Execution Time:0.00056290626525879

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select count(*) as cnt from medicine where  name = 'NEVANAC EYE DROPS' and office_id= '1' 
 Execution Time:0.00071501731872559

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select count(*) as cnt from medicine where  name = 'REFRESH TEARS' and office_id= '1' 
 Execution Time:0.00069403648376465

select count(*) as cnt from medicine where  name = 'REFRESH LIQUIGEL' and office_id= '1' 
 Execution Time:0.00028800964355469

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from medicine where  name = 'EYEMIST FORTE EYE DROPS' and office_id= '1' 
 Execution Time:0.0005040168762207

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from medicine where  name = 'ACUPAT EYE DROPS' and office_id= '1' 
 Execution Time:0.00075292587280273

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select count(*) as cnt from medicine where  name = 'ZYMAR EYE DROPS' and office_id= '1' 
 Execution Time:0.0007319450378418

select count(*) as cnt from medicine where  name = 'DORZOX EYE DROPS' and office_id= '1' 
 Execution Time:0.00060200691223145

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select count(*) as cnt from medicine where  name = 'DORZOX-T EYE DROPS' and office_id= '1' 
 Execution Time:0.00045394897460938

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select count(*) as cnt from medicine where  name = 'TIMOLET-OD EYE DROPS' and office_id= '1' 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001399040222168

select * from examination where examination_id= '24' and   office_id= '1' 
 Execution Time:0.0014510154724121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 24 
 Execution Time:0.001133918762207

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00087380409240723

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013859272003174

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013859272003174

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040698051452637

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='22' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00039887428283691

select count(*) as cnt from medicine where  name = 'EYEMIST EYE DROPS' and office_id= '1' 
 Execution Time:0.00047588348388672

select count(*) as cnt from medicine where  name = 'TOBA EYE DROPS' and office_id= '1' 
 Execution Time:0.00037717819213867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` IS NULL 
 Execution Time:0.0011310577392578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` IS NULL 
 Execution Time:0.00015902519226074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.0002748966217041

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select * from examination where examination_id= '24' and   office_id= '1' 
 Execution Time:0.00073885917663574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002640962600708

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 24 
 Execution Time:0.0035560131072998

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.0002739429473877

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='25' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057792663574219

select * from medicine where medicine_id='25' and office_id= '1' 
 Execution Time:0.00048017501831055

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` IS NULL 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` IS NULL 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028800964355469

select * from examination where examination_id= '24' and   office_id= '1' 
 Execution Time:0.00087714195251465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 24 
 Execution Time:0.00032401084899902

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.00024008750915527

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='25' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054311752319336

select * from medicine where medicine_id='24' and office_id= '1' 
 Execution Time:0.00043797492980957

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select * from medicine where medicine_id='24' and office_id= '1' 
 Execution Time:0.0014829635620117

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select * from medicine where medicine_id='23' and office_id= '1' 
 Execution Time:0.00040006637573242

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select count(*) as cnt from medicine where  name = 'PREDFORTE EYE DROPS' and office_id= '1' 
 Execution Time:0.00034809112548828

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select count(*) as cnt from medicine where  name = 'MYTICOM EYE DROPS' and office_id= '1' 
 Execution Time:0.00028085708618164

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from medicine where  name = 'L-PRED EYE DROPS' and office_id= '1' 
 Execution Time:0.00035595893859863

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select count(*) as cnt from medicine where  name = 'NEPALACT EYE DROPS' and office_id= '1' 
 Execution Time:0.0003209114074707

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select count(*) as cnt from medicine where  name = 'OCULATE EYE DROPS' and office_id= '1' 
 Execution Time:0.00038909912109375

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select count(*) as cnt from medicine where  name = 'NATAMET EYE DROPS' and office_id= '1' 
 Execution Time:0.00049495697021484

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select count(*) as cnt from medicine where  name = 'HOMIDE EYE DROPS' and office_id= '1' 
 Execution Time:0.00036907196044922

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select count(*) as cnt from medicine where  name = 'WINOLAP EYE DROPS' and office_id= '1' 
 Execution Time:0.00045895576477051

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from medicine where  name = 'LACRIGEL GEL' and office_id= '1' 
 Execution Time:0.00028800964355469

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select count(*) as cnt from medicine where  name = 'IOBET EYE DROPS' and office_id= '1' 
 Execution Time:0.0003659725189209

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select count(*) as cnt from medicine where  name = 'LUMIGAN EYE DROPS' and office_id= '1' 
 Execution Time:0.00055789947509766

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select count(*) as cnt from medicine where  name = 'GANFORT EYE DROPS' and office_id= '1' 
 Execution Time:0.0003969669342041

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select count(*) as cnt from medicine where  name = 'BRIMOLOL EYE DROPS' and office_id= '1' 
 Execution Time:0.00045299530029297

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select count(*) as cnt from medicine where  name = 'MILFLOX EYE DROPS' and office_id= '1' 
 Execution Time:0.00023007392883301

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select count(*) as cnt from medicine where  name = 'TOBA F EYE DROPS' and office_id= '1' 
 Execution Time:0.00037312507629395

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from medicine where  name = 'HICOOL EYE DROPS' and office_id= '1' 
 Execution Time:0.00034618377685547

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select count(*) as cnt from medicine_instruction where  name = '2 Times a day' and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from medicine_instruction where  name = '3 Times a day' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from medicine_instruction where  name = '3 Times a day' and office_id= '1' 
 Execution Time:0.00049781799316406

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select count(*) as cnt from medicine_instruction where  name = '2 Times a day' and office_id= '1' 
 Execution Time:0.00039505958557129

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select count(*) as cnt from medicine_instruction where  name = '2 Times per day' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from medicine_instruction where  name = '3 Times per day' and office_id= '1' 
 Execution Time:0.0019619464874268

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select count(*) as cnt from medicine where  name = 'EXOCIN EYE OINT' and office_id= '1' 
 Execution Time:0.0033919811248779

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select count(*) as cnt from medicine where  name = 'ZOBRA EYE OINT' and office_id= '1' 
 Execution Time:0.00040507316589355

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select count(*) as cnt from medicine where  name = 'GEL HICOOL PF GEL' and office_id= '1' 
 Execution Time:0.00039505958557129

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select count(*) as cnt from medicine where  name = 'CETZINE TAB' and office_id= '1' 
 Execution Time:0.00037288665771484

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select count(*) as cnt from medicine where  name = 'P-650 TAB' and office_id= '1' 
 Execution Time:0.0004880428314209

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select count(*) as cnt from medicine where  name = 'TIMOBEST (GLUCOMOL EYE DROPS)' and office_id= '1' 
 Execution Time:0.0062859058380127

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select count(*) as cnt from medicine where  name = 'PARACAINE DROPS' and office_id= '1' 
 Execution Time:0.00027585029602051

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from medicine where  name = 'TROPICACYL PLUS DROPS' and office_id= '1' 
 Execution Time:0.00046992301940918

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select count(*) as cnt from medicine where  name = 'HYPERSOL EYE DROPS' and office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from medicine_category where  name = 'SYRUP' and office_id= '1' 
 Execution Time:0.00068187713623047

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from medicine_instruction where  name = '2 Times a day' and office_id= '1' 
 Execution Time:0.0023918151855469

select count(*) as cnt from medicine_instruction where  name = '2 Times per day' and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from medicine_instruction where  name = 'Per day 2 times' and office_id= '1' 
 Execution Time:0.0028479099273682

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select count(*) as cnt from medicine where  name = 'AUGMENTIN DUO SYRUP' and office_id= '1' 
 Execution Time:0.00031590461730957

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from medicine where  name = 'P-250 SYRUP' and office_id= '1' 
 Execution Time:0.00030398368835449

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select count(*) as cnt from medicine where  name = 'IBUGESIC PLUS SYRUP' and office_id= '1' 
 Execution Time:0.00035405158996582

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select count(*) as cnt from medicine where  name = 'CETZINE SYRUP' and office_id= '1' 
 Execution Time:0.0013120174407959

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select count(*) as cnt from medicine where  name = 'CHERRYMINT-DM SYRUP' and office_id= '1' 
 Execution Time:0.0003349781036377

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select count(*) as cnt from medicine where  name = 'AUGMENTIN 625 TAB' and office_id= '1' 
 Execution Time:0.00042009353637695

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select count(*) as cnt from medicine where  name = 'SINAREST TAB' and office_id= '1' 
 Execution Time:0.00035786628723145

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from medicine where  name = 'OMNACORTIL 10MG TAB' and office_id= '1' 
 Execution Time:0.00043201446533203

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select count(*) as cnt from medicine where  name = 'OMNACORTIL 20MG TAB' and office_id= '1' 
 Execution Time:0.0003819465637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010318756103516

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select count(*) as cnt from medicine where  name = 'ZOXAN 500 TAB' and office_id= '1' 
 Execution Time:0.00034809112548828

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select count(*) as cnt from medicine where  name = 'CHYMORAL FORTE TAB' and office_id= '1' 
 Execution Time:0.00045514106750488

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select count(*) as cnt from medicine where  name = 'MECOFREE OD CAPS' and office_id= '1' 
 Execution Time:0.00030994415283203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011048316955566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011048316955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011048316955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011048316955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020780563354492

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011048316955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020780563354492

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018410682678223

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select count(*) as cnt from medicine where  name = 'ACHE-P TAB' and office_id= '1' 
 Execution Time:0.0022048950195312

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select count(*) as cnt from medicine where  name = 'DICLOMINT-S TAB' and office_id= '1' 
 Execution Time:0.00031304359436035

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select count(*) as cnt from medicine where  name = 'ZINCOVIT TAB' and office_id= '1' 
 Execution Time:0.00047898292541504

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select count(*) as cnt from medicine where  name = 'EYEVITAL CAPS (30\'s Pack)' and office_id= '1' 
 Execution Time:0.00044608116149902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from medicine where  name = 'LIMCEE TAB' and office_id= '1' 
 Execution Time:0.00030708312988281

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select count(*) as cnt from medicine where  name = 'OSMEGA 500MG CAPS' and office_id= '1' 
 Execution Time:0.00029206275939941

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select count(*) as cnt from medicine where  name = 'AZIMINT TAB' and office_id= '1' 
 Execution Time:0.0034611225128174

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00029921531677246

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00029921531677246

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select count(*) as cnt from medicine where  name = 'PANMINT TAB' and office_id= '1' 
 Execution Time:0.00027799606323242

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select count(*) as cnt from medicine where  name = 'CAL-UP TAB' and office_id= '1' 
 Execution Time:0.00027298927307129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select count(*) as cnt from medicine where  name = 'DIAMOX TAB' and office_id= '1' 
 Execution Time:0.00037288665771484

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from medicine where  name = 'I SITE PLUS CAPS' and office_id= '1' 
 Execution Time:0.00044894218444824

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select count(*) as cnt from medicine where  name = 'T.OMNACORTIL 5MG TAB' and office_id= '1' 
 Execution Time:0.00036001205444336

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select count(*) as cnt from medicine where  name = 'ZOBRA EYE DROPS' and office_id= '1' 
 Execution Time:0.00045895576477051

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select count(*) as cnt from medicine where  name = 'ZIVIFRESH EYE DROPS' and office_id= '1' 
 Execution Time:0.00052213668823242

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select count(*) as cnt from medicine where  name = 'ZIVIFRESH GEL' and office_id= '1' 
 Execution Time:0.00046801567077637

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select count(*) as cnt from medicine where  name = 'ATROPINE EYE DROPS' and office_id= '1' 
 Execution Time:0.00032901763916016

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select count(*) as cnt from medicine where  name = 'ZIVIMOX EYE DROPS' and office_id= '1' 
 Execution Time:0.00032806396484375

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00089883804321289

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00089883804321289

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select count(*) as cnt from medicine where  name = 'EYEMIST GEL' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from medicine where  name = 'DUCIRA GEL' and office_id= '1' 
 Execution Time:0.00043296813964844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='4' and  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select count(*) as cnt from medicine where  name = 'MULTIUP SYRUP' and office_id= '1' 
 Execution Time:0.00043606758117676

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from medicine where  name = 'MULTIUP-ZC TAB' and office_id= '1' 
 Execution Time:0.0004889965057373

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from medicine where  name = 'SIBELIUM 5MG TAB' and office_id= '1' 
 Execution Time:0.00041604042053223

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select count(*) as cnt from medicine where  name = 'BRINZOTIM (BRIONZOX T EYE DROPS)' and office_id= '1' 
 Execution Time:0.00033688545227051

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select count(*) as cnt from medicine where  name = 'BRINOLAR EYE DROPS' and office_id= '1' 
 Execution Time:0.00047087669372559

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select count(*) as cnt from medicine where  name = 'TROPICAMET DROPS(TROPICACYL DROPS)' and office_id= '1' 
 Execution Time:0.00033092498779297

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select count(*) as cnt from medicine where  name = 'CYCLOPENT DROPS (DILATE EYE DROPS)' and office_id= '1' 
 Execution Time:0.00053310394287109

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from medicine where  name = 'SOLINE (HYPERSOL EYE OINT)' and office_id= '1' 
 Execution Time:0.00044417381286621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 26 
 Execution Time:0.00054097175598145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 27 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select * from examination where examination_id= '24' and   office_id= '1' 
 Execution Time:0.0049319267272949

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 24 
 Execution Time:0.00076198577880859

select * from examination_chargesdetails where  examination_id= '24' 
 Execution Time:0.0037500858306885

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034430027008057

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098896026611328

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098896026611328

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.007594108581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 31 
 Execution Time:0.00018596649169922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 32 
 Execution Time:0.00045084953308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.0010099411010742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.00037384033203125

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00025200843811035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027084350585938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105


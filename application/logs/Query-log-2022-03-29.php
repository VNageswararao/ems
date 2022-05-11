select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014427900314331

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014427900314331

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014427900314331

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014427900314331

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045411586761475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014427900314331

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045411586761475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041720867156982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014427900314331

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045411586761475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041720867156982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014427900314331

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045411586761475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041720867156982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014427900314331

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045411586761475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041720867156982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014427900314331

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045411586761475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041720867156982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034689903259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021960735321045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014427900314331

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052170753479004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045411586761475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041720867156982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034689903259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021960735321045

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0077869892120361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093913078308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093913078308105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014810562133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093913078308105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014810562133789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088787078857422

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088787078857422

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047206878662109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047206878662109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047206878662109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047206878662109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025308132171631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047206878662109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025308132171631

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038151741027832

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032379627227783

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038151741027832

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032379627227783

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036740303039551

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038151741027832

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032379627227783

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0035290718078613

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 712 
 Execution Time:0.0007331371307373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 814 
 Execution Time:0.00060415267944336

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 814  and `patient_registration_id` = 712 
 Execution Time:0.0036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 712 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 814 
 Execution Time:0.00050902366638184

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 814  and `patient_registration_id` = 712 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029449462890625

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029449462890625

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017261505126953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 619 
 Execution Time:0.00028014183044434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 696 
 Execution Time:0.00048995018005371

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 696  and `patient_registration_id` = 619 
 Execution Time:0.00037288665771484

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 619 
 Execution Time:0.0010600090026855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065708160400391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065708160400391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012331008911133

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032401084899902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032401084899902

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052714347839355

select * from examination where examination_id= '618' and   office_id= '1' 
 Execution Time:0.00095295906066895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029940605163574

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 618 
 Execution Time:0.0039050579071045

select * from examination_chargesdetails where  examination_id= '618' 
 Execution Time:0.0039010047912598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 619 
 Execution Time:0.00038886070251465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 696 
 Execution Time:0.00049996376037598

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 696  and `patient_registration_id` = 619 
 Execution Time:0.00029301643371582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 619 
 Execution Time:0.0014970302581787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0090658664703369

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0090658664703369

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065112113952637

select * from examination where examination_id= '618' and   office_id= '1' 
 Execution Time:0.0010859966278076

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 618 
 Execution Time:0.0027639865875244

select * from examination_chargesdetails where  examination_id= '618' 
 Execution Time:0.00060200691223145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092387199401855

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092387199401855

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034489631652832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034489631652832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052785873413086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034489631652832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 712 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 814 
 Execution Time:0.00025200843811035

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 814  and `patient_registration_id` = 712 
 Execution Time:0.00041699409484863

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 712 
 Execution Time:0.0027618408203125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046992301940918

select * from examination where examination_id= '736' and   office_id= '1' 
 Execution Time:0.0007169246673584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 736 
 Execution Time:0.00038290023803711

select * from examination_chargesdetails where  examination_id= '736' 
 Execution Time:0.00033807754516602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079202651977539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079202651977539

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0041861534118652

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='115' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00051999092102051

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011050701141357

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00096392631530762

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0003960132598877

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00091290473937988

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='43' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013251304626465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013251304626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013251304626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013251304626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013251304626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.019949197769165

select count(*) as cnt from patient_registration where  patient_registration_id= '712' and  office_id= '1' 
 Execution Time:0.00090193748474121

select count(*) as cnt from patient_registration where  patient_registration_id= '712' and  office_id= '1' 
 Execution Time:0.00090193748474121

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=712  
 Execution Time:0.0046651363372803

select count(*) as cnt from patient_registration where  patient_registration_id= '712' and  office_id= '1' 
 Execution Time:0.00090193748474121

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=712  
 Execution Time:0.0046651363372803

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=712  
 Execution Time:0.003230094909668

select count(*) as cnt from patient_registration where  patient_registration_id= '712' and  office_id= '1' 
 Execution Time:0.00090193748474121

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=712  
 Execution Time:0.0046651363372803

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=712  
 Execution Time:0.003230094909668

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='712' and  office_id= '1' 
 Execution Time:0.0013389587402344

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097298622131348

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097298622131348

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049519538879395

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00058913230895996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001162052154541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.001223087310791

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.001223087310791

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0017859935760498

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.0005950927734375

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.0005950927734375

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=467  
 Execution Time:0.0042018890380859

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.0005950927734375

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=467  
 Execution Time:0.0042018890380859

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=467  
 Execution Time:0.0013329982757568

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.0005950927734375

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=467  
 Execution Time:0.0042018890380859

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=467  
 Execution Time:0.0013329982757568

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='467' and  office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from patient_registration where  patient_registration_id= '277' and  office_id= '1' 
 Execution Time:0.0012261867523193

select count(*) as cnt from patient_registration where  patient_registration_id= '277' and  office_id= '1' 
 Execution Time:0.0012261867523193

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=277  
 Execution Time:0.0036578178405762

select count(*) as cnt from patient_registration where  patient_registration_id= '277' and  office_id= '1' 
 Execution Time:0.0012261867523193

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=277  
 Execution Time:0.0036578178405762

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=277  
 Execution Time:0.0010240077972412

select count(*) as cnt from patient_registration where  patient_registration_id= '277' and  office_id= '1' 
 Execution Time:0.0012261867523193

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=277  
 Execution Time:0.0036578178405762

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=277  
 Execution Time:0.0010240077972412

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='277' and  office_id= '1' 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061988830566406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061988830566406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.00097489356994629

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.00097489356994629

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=467  
 Execution Time:0.0044419765472412

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.00097489356994629

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=467  
 Execution Time:0.0044419765472412

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=467  
 Execution Time:0.00060105323791504

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.00097489356994629

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=467  
 Execution Time:0.0044419765472412

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=467  
 Execution Time:0.00060105323791504

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='467' and  office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064802169799805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064802169799805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from patient_appointment where  patient_registration_id = 467 and appointment_date= '2022-03-29' 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.00057697296142578

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=467  
 Execution Time:0.0043270587921143

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.00057697296142578

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=467  
 Execution Time:0.0043270587921143

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=467  
 Execution Time:0.0014979839324951

select count(*) as cnt from patient_registration where  patient_registration_id= '467' and  office_id= '1' 
 Execution Time:0.00057697296142578

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=467  
 Execution Time:0.0043270587921143

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=467  
 Execution Time:0.0014979839324951

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='467' and  office_id= '1' 
 Execution Time:0.00041079521179199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020220279693604

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020220279693604

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044329166412354

select * from investigation where  investigation_id=5  and office_id= 1 and status=1 
 Execution Time:0.00055122375488281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027949810028076

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027949810028076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027949810028076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.008652925491333

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.008652925491333

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.008652925491333

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.008652925491333

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013351440429688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095915794372559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 467 
 Execution Time:0.00037908554077148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 815 
 Execution Time:0.00028800964355469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 815  and `patient_registration_id` = 467 
 Execution Time:0.0015099048614502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 467 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 815 
 Execution Time:0.00023698806762695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 815  and `patient_registration_id` = 467 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00096297264099121

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00096297264099121

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062704086303711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027010440826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027010440826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027010440826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027010440826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027010440826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027010440826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027010440826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027010440826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011610984802246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027010440826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011610984802246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027010440826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011610984802246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047421455383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047421455383301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047421455383301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047421455383301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047421455383301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007469654083252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015318393707275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047421455383301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007469654083252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015318393707275

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049686431884766

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054311752319336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054311752319336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075793266296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075793266296387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075793266296387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0045840740203857

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0045840740203857

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010180473327637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0045840740203857

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010180473327637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0045840740203857

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010180473327637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 713 
 Execution Time:0.00064492225646973

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 816 
 Execution Time:0.00040984153747559

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 816  and `patient_registration_id` = 713 
 Execution Time:0.00072097778320312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007631778717041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007631778717041

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036470890045166

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036470890045166

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017468929290771

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036470890045166

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017468929290771

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036470890045166

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029258728027344

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017468929290771

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 713 
 Execution Time:0.0023219585418701

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 816 
 Execution Time:0.0012011528015137

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 816  and `patient_registration_id` = 713 
 Execution Time:0.00073814392089844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 713 
 Execution Time:0.0021281242370605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.029231071472168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.029231071472168

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.01285982131958

select * from examination where examination_id= '737' and   office_id= '1' 
 Execution Time:0.00063419342041016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 737 
 Execution Time:0.0010941028594971

select * from examination_chargesdetails where  examination_id= '737' 
 Execution Time:0.0036940574645996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='97' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014028549194336

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012331008911133

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066399574279785

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0006561279296875

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012669563293457

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.007457971572876

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select count(*) as cnt from medicine where  name = 'cipro 500' and office_id= '1' 
 Execution Time:0.00068116188049316

select count(*) as cnt from medicine where  name = 'Diamox 250 MG' and office_id= '1' 
 Execution Time:0.0009920597076416

select count(*) as cnt from medicine where  name = 'ANXIT 0.5 MG' and office_id= '1' 
 Execution Time:0.00075697898864746

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select count(*) as cnt from medicine where  name = 'FLUR' and office_id= '1' 
 Execution Time:0.00089001655578613

select count(*) as cnt from medicine where  name = 'TROPICACYL PLUS' and office_id= '1' 
 Execution Time:0.00041389465332031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035650730133057

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013198852539062

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035650730133057

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013198852539062

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035650730133057

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013198852539062

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007328987121582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 467 
 Execution Time:0.00039076805114746

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 815 
 Execution Time:0.00063204765319824

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 815  and `patient_registration_id` = 467 
 Execution Time:0.0054750442504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00978684425354

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00978684425354

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00978684425354

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00978684425354

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 467 
 Execution Time:0.00043988227844238

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 815 
 Execution Time:0.00037503242492676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 815  and `patient_registration_id` = 467 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013899803161621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013899803161621

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030088424682617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0038971900939941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0038971900939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002730131149292

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0063240528106689

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0038971900939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002730131149292

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0063240528106689

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0040841102600098

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0038971900939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002730131149292

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0063240528106689

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0040841102600098

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00019216537475586

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.0030210018157959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.004054069519043

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.004054069519043

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00046801567077637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00043916702270508

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075387954711914

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075387954711914

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051093101501465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00041913986206055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00031518936157227

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067806243896484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067806243896484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00031685829162598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.0002591609954834

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020558834075928

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00037813186645508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.0002589225769043

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00023412704467773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058507919311523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058507919311523

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004279613494873

